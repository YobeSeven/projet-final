<input type="checkbox" id="check" />
<label class="for-check" for="check">
    <i class="fas fa-bars " id="btn-sidebar"></i>
    <i class="fas fa-times" id="cancel"></i>
</label>
<nav class="sidebar">
    <header class="header-sidebar text-sidebar">
        <img class="mx-auto mt-2 mb-2" src="{{asset('img/logo.png')}}" alt="">
    </header>
    <a href="{{route('profile')}}" class="active link-sidebar">
        <i class="fas fa-qrcode icone-sidebar"></i>
        <span class="text-sidebar">Profile</span>
    </a>
    @Admin
        <a class="link-sidebar" href="{{route('home.index')}}">
            <i class="fas fa-link icone-sidebar"></i>
            <span class="text-sidebar">Home Admin</span>
        </a>
        <a class="link-sidebar" href="{{route('all-title.index')}}">
            <i class="fas fa-stream icone-sidebar"></i>
            <span class="text-sidebar">All title</span>
        </a>
        <a class="link-sidebar" href="{{route('aboutSection.index')}}">
            <i class="fas fa-stream icone-sidebar"></i>
            <span class="text-sidebar">About Section</span>
        </a>
        <a class="link-sidebar" href="{{route('testimonial.index')}}">
            <i class="far fa-question-circle icone-sidebar"></i>
            <span class="text-sidebar">Testimonal</span>
        </a>
        <a class="link-sidebar" href="{{route('promotion.index')}}">
            <i class="far fa-question-circle icone-sidebar"></i>
            <span class="text-sidebar">Promotion</span>
        </a>
        <a class="link-sidebar" href="{{route('footer.index')}}">
            <i class="fas fa-calendar icone-sidebar"></i>
            <span class="text-sidebar">Footer</span>
        </a>
        <a class="link-sidebar" href="{{route('subject.index')}}">
            <i class="far fa-envelope icone-sidebar"></i>
            <span class="text-sidebar">Subject</span>
        </a>
        <a class="link-sidebar" href="{{route('newsletter.index')}}">
            <i class="fas fa-sliders-h icone-sidebar"></i>
            <span class="text-sidebar">Newsletter</span>
        </a>    
    @endAdmin
    @Webmaster
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