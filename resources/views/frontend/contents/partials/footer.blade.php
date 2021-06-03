	<!-- Footer section -->
	<footer class="footer-section">
		@foreach ($footers as $item)
			<h2>{{$item->texte}} <a href="{{$item->lien}}" target="_blank">{{$item->lien_texte}}</a></h2>			
		@endforeach
	</footer>
	<!-- Footer section end -->