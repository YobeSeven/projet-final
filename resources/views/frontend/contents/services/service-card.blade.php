<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">
            @foreach ($cardServices as $item)
                <!-- Single Card -->
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <img src="{{asset('img/' . $item->image_card)}}" alt="">
                        </div>
                        <div class="card-text">
                            <h2>{{$item->titre_card}}</h2>
                            <p>{{$item->texte_card}}</p>
                        </div>
                    </div>
                </div>                
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->