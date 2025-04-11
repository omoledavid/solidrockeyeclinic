<?php

namespace App\Http\Controllers;

use App\Enums\AppointmenStatus;
use App\Models\Appointment;
use App\Models\Hmo;
use App\Models\Post;
use App\Models\Service;
use App\Models\Technology;
use Firefly\FilamentBlog\Enums\PostStatus;
use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function home(): View
    {
        $pageName = 'Home';
        $posts = Post::query()->where('status', PostStatus::PUBLISHED)->latest()->limit(3)->get();
        $services = Service::query()->where('active', true)->latest()->limit(3)->get();
        return view('home', compact('pageName', 'posts','services'));
    }

    public function about(): View
    {
        $pageName = 'About Us';
        $hmos = Hmo::query()->get();
        return view('pages.about', compact('pageName', 'hmos'));
    }
    public function services(): View
    {
        $pageName = 'Services';
        $services = Service::query()->get();
        return view('pages.services.index', compact('pageName', 'services'));
    }
    public function contact(): View
    {
        $pageName = 'Contact Us';
        return view('contact', compact('pageName'));
    }
    public function bookAppointment(): View
    {
        $pageName = 'Book Appointment';
        return view('book-appointment', compact('pageName'));
    }
    public function blog()
    {
        $pageName = 'Our Blog';
        $posts = Post::query()->paginate(10);
        return view('pages.blog.index', compact('pageName','posts'));
    }
    public function viewPost($slug): View
    {
        $post = Post::query()->where('slug', $slug)->firstOrFail();
        $pageName = $post->title;

        $categories = Category::query()->withCount('posts')->orderByDesc('posts_count')->get();
        $tags = Tag::query()->whereHas('posts')->withCount('posts')->orderByDesc('posts_count')->get();

        // Get related posts based on shared categories (excluding the current post)
        $relatedPosts = Post::whereHas('categories', function ($query) use ($post) {
            $query->whereIn(
                config('filamentblog.tables.prefix') . 'categories.id',  // Correctly prefixed table name
                $post->categories->pluck('id')
            );
        })
            ->where('id', '!=', $post->id) // Exclude the current post
            ->with(['categories', 'user'])
            ->limit(5)
            ->get();


        $post->load([
            'user',
            'categories',
            'tags',
            'comments' => fn($query) => $query->approved(),
            'comments.user'
        ]);


        return view('pages.blog.show', compact('pageName', 'post', 'categories', 'tags', 'relatedPosts'));
    }
    public function technology(): View
    {
        $pageName = 'Technology';
        $technologies = Technology::query()->where('status', true)->get();
        return view('pages.technology', compact('pageName','technologies'));
    }
    public function showService($slug): View
    {
        $service = Service::query()->where('slug', $slug)->firstOrFail();
        $services = Service::query()->where('active', true)->where('id', '!=', $service->id)->latest()->get();
        $pageName = 'Services - '.$service->name;
        return view('pages.services.show', compact('pageName', 'service', 'services'));
    }
    public function appointment(Request $request): JsonResponse
    {
        $validatedData = Validator::make($request->all(), [
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
            'date'  => 'required|date',
            'phone'  => 'required',
            'service'  => 'required|string',
        ]);

        if ($validatedData->fails()) {
            // Get the first field that failed
            $firstErrorKey = array_key_first($validatedData->errors()->messages());
            return response()->json('failed to book appointment :'.$firstErrorKey);
        }

        // Now get the actual validated data
        $data = $validatedData->validated();
        $data['status'] = AppointmenStatus::PENDING;

        Appointment::query()->create($data);

        return response()->json('success');
    }

}
