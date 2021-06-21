<input type="checkbox" id="check" />
<label class="for-check" for="check">
    <i class="fas fa-bars " id="btn-sidebar"></i>
    <i class="fas fa-times" id="cancel"></i>
</label>
<nav class="sidebar">
    <header class="header-sidebar text-sidebar">
        <img class="mx-auto mt-2 mb-2" src="{{asset('img/logo.png')}}" alt="">
    </header>
    <a href="{{route('profile')}}" class="link-sidebar">
        <i class="fas fa-qrcode icone-sidebar"></i>
        <span class="text-sidebar">Profile</span>
    </a>
    <a href="{{route('admin')}}" class="active link-sidebar">
        <i class="fas fa-qrcode icone-sidebar"></i>
        <span class="text-sidebar">admin</span>
    </a>
    @Webmaster
        <a class="link-sidebar" href="{{route('newsletter.index')}}">
            <i class="fas fa-sliders-h icone-sidebar"></i>
            <span class="text-sidebar">Newsletter</span>
        </a>    
        <a class="link-sidebar" href="{{route('validate.index')}}">
            <i class="fas fa-sliders-h icone-sidebar"></i>
            <span class="text-sidebar">Validate</span>
        </a>
    @endWebmaster
    @Redacteur
        <a class="link-sidebar" href="{{route('blog.index')}}">
            <i class="far fa-question-circle icone-sidebar"></i>
            <span class="text-sidebar">Blog</span>
        </a>    
    @endRedacteur
    <a class="link-sidebar" href="{{route('logout')}}">
        <i class="fas fa-sign-out-alt icone-sidebar"></i>
        <span class="text-sidebar">Logout</span>
    </a>
</nav>