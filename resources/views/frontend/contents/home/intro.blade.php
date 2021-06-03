<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            @foreach ($intros as $item)
                <img src="{{asset('img/' . $item->image_logo)}}" alt="">                
                <p>{{$item->titre_logo}}</p>
            @endforeach
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carouselIntros as $item)
        <div class="item  hero-item" data-bg="{{$item->img_carousel}}"></div>
        @endforeach
    </div>
</div>
<!-- Intro Section -->
