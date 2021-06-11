<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="img/logo.png" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('services')}}">Services</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            {{-- @guest                
                <li><a href="{{route('login')}}">login</a></li>
                <li><a href="{{route('register')}}">register</a></li>
            @endguest
            @auth
            <li><a href="{{route('admin')}}">admin</a></li>
            <li><a href="{{route('logout')}}">logout</a></li>
            @endauth --}}
        </ul>
    </nav>
</header>
<!-- Header section end -->