<input type="checkbox" id="check" />
<label class="for-check" for="check">
    <i class="fas fa-bars " id="btn-sidebar"></i>
    <i class="fas fa-times" id="cancel"></i>
</label>
<nav class="sidebar">
    <header class="header-sidebar text-sidebar">
        <img class="mx-auto mt-2 mb-2" src="{{asset('img/logo.png')}}" alt="">
    </header>
    <a href="#" class="active link-sidebar">
        <i class="fas fa-qrcode icone-sidebar"></i>
        <span class="text-sidebar">Dashboard</span>
    </a>
    <a class="link-sidebar" href="#">
        <i class="fas fa-link icone-sidebar"></i>
        <span class="text-sidebar">Shortcuts</span>
    </a>
    <a class="link-sidebar" href="#">
        <i class="fas fa-stream icone-sidebar"></i>
        <span class="text-sidebar">Overview</span>
    </a>
    <a class="link-sidebar" href="#">
        <i class="fas fa-calendar icone-sidebar"></i>
        <span class="text-sidebar">Events</span>
    </a>
    <a class="link-sidebar" href="#">
        <i class="far fa-question-circle icone-sidebar"></i>
        <span class="text-sidebar">About</span>
    </a>
    <a class="link-sidebar" href="#">
        <i class="fas fa-sliders-h icone-sidebar"></i>
        <span class="text-sidebar">Services</span>
    </a>
    <a class="link-sidebar" href="#">
        <i class="far fa-envelope icone-sidebar"></i>
        <span class="text-sidebar">Contact</span>
    </a>
    <a class="link-sidebar" href="{{route('logout')}}">
        <i class="fas fa-sign-out-alt icone-sidebar"></i>
        <span class="text-sidebar">Logout</span>
    </a>
</nav>