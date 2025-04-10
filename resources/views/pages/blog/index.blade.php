<x-app-layout pageName="{{$pageName}}">
    <x-head-banner pageName="{{$pageName}}" :style="true"></x-head-banner>
    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <x-solidrock.blog-card :$post/>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Post Pagination Start -->
                    {{ $posts->links('vendor.pagination.custom') }}
                    <!-- Post Pagination End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->
</x-app-layout>
