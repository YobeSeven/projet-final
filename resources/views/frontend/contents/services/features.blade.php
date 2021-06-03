<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>Get in <span>the Lab</span> and  discover the world</h2>
        </div>
        <div class="row">
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($featureServices as $item)
                    @if (!($item->id < 4))
                        <div class="icon-box light left">
                            <div class="service-text">
                                <h2>{{$item->titre_item}}</h2>
                                <p>{{$item->texte_item}}</p>
                            </div>
                            <div class="icon">
                                <i class="{{$item->icone_item}}"></i>
                            </div>
                        </div>                                        
                    @endif
                @endforeach
            </div>
            <!-- Devices -->
            <div class="col-md-4 col-sm-4 devices">
                <div class="text-center">
                    <img src="{{asset('img/device.png')}}" alt="">
                </div>
            </div>
            <!-- feature item -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($featureServices as $item)
                    @if (!($item->id > 3))
                        <div class="icon-box light">
                            <div class="icon">
                                <i class="{{$item->icone_item}}"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{$item->titre_item}}</h2>
                                <p>{{$item->texte_item}}</p>
                            </div>
                        </div>                                        
                    @endif
                @endforeach
            </div>
        </div>
        <div class="text-center mt100">
            <a href="" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- features section end-->