<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="img/big-logo.png" alt="">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, nihil?</p>
            {{-- <p>{{$item->texte_carousel}}</p> --}}
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
            @foreach ($carouselIntros as $item)
            <div class="item  hero-item" data-bg="{{$item->image_carousel}}"></div>
			{{-- <div class="item  hero-item" data-bg="img/02.jpg"></div> --}}
            @endforeach
		</div>
	</div>
	<!-- Intro Section -->