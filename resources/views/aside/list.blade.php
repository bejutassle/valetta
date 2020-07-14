<div class="isotope-wrapper">
    <div class="row">
    	@forelse  ($explorers as $explore)
			<div class="col-md-6 isotope-item latest">
				<div class="review_listing">
					<div class="clearfix add_bottom_15">
						<figure><img class="bg-primary" src="{{ $explore['categories'][0]['icon']['prefix'] }}512{{ $explore['categories'][0]['icon']['suffix'] }}" alt=""></figure>
						<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
						<small>{{ $explore['categories'][0]['name'] }}</small>
					</div>
					<h3><strong>Jhon Doe</strong></h3>
					<h4>{{ $explore['name'] }}</h4>
					<p>
					@foreach ($explore['location']['formattedAddress'] as $address)
						{{ $address }}
					@endforeach
					</p>
					<ul class="clearfix">
						<li><small>Published: 26.08.2018</small></li>
						<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
					</ul>
				</div>
			</div>
			<!-- /review_listing grid -->
		@empty
		<div class="col-md-12">
			<a class="box_topic" role="button">
				<i class="fa fa-warning"></i>
				<h3>Opps!</h3>
				<p>{{ $warning['text'] }}</p>
			</a>
		</div>
    	@endforelse
    </div>
    <!-- /row -->
</div>
<!-- /isotope-wrapper -->