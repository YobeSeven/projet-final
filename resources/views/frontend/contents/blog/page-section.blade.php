<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                @foreach ($lastArticles as $item)
                    @if ($item->trash === 0 && $item->validate === 1)
                        <!-- Post item -->
                        <div class="post-item">
                            <div class="post-thumbnail">
                                <img src="{{asset('img/blog/' . $item->image)}}" alt="">
                                <div class="post-date">
                                    <h2>03</h2>
                                    <h3>Nov 2017</h3>
                                </div>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title">{{$item->titre}}</h2>
                                <div class="post-meta">
                                    <a href="">{{$item->categorie->nom_categorie}}</a>
                                    <a href="">{{$item->tag->nom_tag}}</a>
                                    <a href="">2 Comments</a>
                                </div>
                                <p>{{$item->article}}</p>
                                <a href="{{route('blog-post' , $item->id)}}" class="read-more">Read More</a>
                            </div>
                        </div>                    
                    @endif
                @endforeach
                <div class="mt-3">
                    {{ $articles->links('vendor/pagination/default') }}
                </div>
            </div>
            <!-- Sidebar area -->
            <div class="col-md-4 col-sm-5 sidebar">
                <!-- Single widget -->
                <div class="widget-item">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search">
                        <button class="search-btn"><i class="flaticon-026-search"></i></button>
                    </form>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        <li><a href="#">Vestibulum maximus</a></li>
                        <li><a href="#">Nisi eu lobortis pharetra</a></li>
                        <li><a href="#">Orci quam accumsan </a></li>
                        <li><a href="#">Auguen pharetra massa</a></li>
                        <li><a href="#">Tellus ut nulla</a></li>
                        <li><a href="#">Etiam egestas viverra </a></li>
                    </ul>
                </div>
                <!-- Single widget -->
                <div class="widget-item">
                    <h2 class="widget-title">LOL</h2>
                    <ul class="tag">
                        <li><a href="">branding</a></li>
                        <li><a href="">identity</a></li>
                        <li><a href="">video</a></li>
                        <li><a href="">design</a></li>
                        <li><a href="">inspiration</a></li>
                        <li><a href="">web design</a></li>
                        <li><a href="">photography</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page section end-->