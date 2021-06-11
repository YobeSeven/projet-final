<!-- services section -->
<div class="services-section spad">
	<div class="container">
		<div class="section-title dark">
			@foreach ($serviceTitres as $item)
				<h2>{{$item->section}}</h2>				
			@endforeach
		</div>
		<div class="row">
			@foreach ($services as $item)
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
		<div class="mt-3">
			{{ $services->links('vendor/pagination/default') }}
		</div>
		<div class="text-center">
			<a href="" class="site-btn">Salut</a>
		</div>
	</div>
</div>
<!-- services section end -->
