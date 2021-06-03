<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    @foreach ($homeTitres as $item)
                        <h2>{{$item->titre_testimonial}}</h2>                        
                    @endforeach
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    @foreach ($testimonials as $item)
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>‘​‌‘​‌</span>
                            <p>{{$item->texte_client}}</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="{{asset('img/avatar/' . $item->image_client)}}" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>{{$item->nom_client}}</h2>
                                    <p>{{$item->job_client}}</p>
                                </div>
                            </div>
                        </div>                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->