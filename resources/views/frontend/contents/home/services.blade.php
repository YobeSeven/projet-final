<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            @foreach ($homeTitres as $item)
                <h2>
                    @php
                        $titre = str_replace('(', '<span>', $item->titre_service);
                        $titrebis = str_replace(')', '</span>', $titre);
                        echo $titrebis;
                    @endphp
                </h2>
            @endforeach
        </div>
        <div class="row">
            @foreach ($serviceRandomFor9 as $item)
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="{{$item->icone}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$item->titre_service}}</h2>
                            <p>{{$item->texte_service}}</p>
                        </div>
                    </div>
                </div>             
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{route('services')}}" class="site-btn">Browse</a>
        </div>
    </div>
</div>
<!-- services section end -->