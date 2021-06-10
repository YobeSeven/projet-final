<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach ($serviceRandomFor3 as $item)
                    <!-- single card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{$item->icone}}"></i>
                            </div>
                            <h2>{{$item->titre_service}}</h2>
                            <p>{{$item->texte_service}}</p>
                        </div>
                    </div>                
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            @foreach ($aboutSections as $item)
                <div class="section-title">
                    <h2>{{$item->titre_section}}</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>{{$item->texte_premier_section}}</p>
                    </div>
                    <div class="col-md-6">
                        <p>{{$item->texte_deuxieme_section}}</p>
                    </div>
                </div>
                <div class="text-center mt60">
                    <a href="#" class="site-btn">Browse</a>
                </div>
                <!-- popup video -->
                <div class="intro-video">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <img src="{{asset('img/video.jpg')}}" alt="">
                            <a href="{{$item->lien}}" class="video-popup">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- About section end -->