<!-- Team Section -->
<div class="team-section spad">
	<div class="overlay"></div>
	<div class="container">
		<div class="section-title">
			@foreach ($homeTitres as $item)
				<h2>{{$item->titre_team}}</h2>				
			@endforeach
		</div>
		<div class="row">
			@foreach ($teamRandom1s as $item)
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('img/team/' . $item->image)}}" alt="">
						<h2>{{$item->name}}</h2>
						<h3>{{$item->poste->poste_name}}</h3>
					</div>
				</div>				
			@endforeach
			@foreach ($ceos as $item)
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('img/team/' . $item->image)}}" alt="">
						<h2>{{$item->name}}</h2>
						<h3>{{$item->poste->poste_name}}</h3>
					</div>
				</div>				
			@endforeach
			@foreach ($teamRandom2s as $item)
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="{{asset('img/team/' . $item->image)}}" alt="">
						<h2>{{$item->name}}</h2>
						<h3>{{$item->poste->poste_name}}</h3>
					</div>
				</div>				
			@endforeach
		</div>
	</div>
</div>
<!-- Team Section end-->
