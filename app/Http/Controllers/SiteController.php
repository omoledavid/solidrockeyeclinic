<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function home(): View
    {
        $pageName = 'Home';
        return view('home', compact('pageName'));
    }

    public function about(): View
    {
        $pageName = 'About Us';
        return view('about', compact('pageName'));
    }
    public function services(): View
    {
        $pageName = 'Services';
        return view('services', compact('pageName'));
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

}
