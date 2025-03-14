<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{route('home')}}">
                    <img width="230px" src="{{asset('assets/images/logo.png')}}" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                @include('partials.nav')
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
