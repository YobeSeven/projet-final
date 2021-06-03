<!-- Promotion section -->
<div class="promotion-section">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				@foreach ($promotions as $item)
					<h2>{{$item->titre_promotion}}</h2>
					<p>{{$item->texte_promotion}}</p>					
				@endforeach
			</div>
			<div class="col-md-3">
				<div class="promo-btn-area">
					<a href="" class="site-btn btn-2">Browse</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Promotion section end-->
