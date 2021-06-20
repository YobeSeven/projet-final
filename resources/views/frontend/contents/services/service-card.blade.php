<!-- services card section-->
<div class="services-card-section spad">
    <div class="container">
        <div class="row">

            @foreach ($lastArticles as $item)
                <!-- Single Card -->
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <img src="{{asset('img/blog/' . $item->image)}}" alt="">
                        </div>
                        <div class="card-text">
                            <h2>{{$item->titre}}</h2>
                            <p>{{$item->article}}</p>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->