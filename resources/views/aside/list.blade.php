<div class="isotope-wrapper">
    <div class="row" id="wrapper_waypoint">
    	@forelse  ($explorers as $explore)
			<div class="col-md-6 isotope-item" data-list="waypoint" id="{{ $loop->iteration }}" last-id="{{ count($explorers) }}">
				<div class="review_listing">
					<div class="clearfix add_bottom_15">
						<figure><img class="bg-primary" src="{{ $explore['categories'][0]['icon']['prefix'] }}512{{ $explore['categories'][0]['icon']['suffix'] }}" alt=""></figure>
						<small>{{ $explore['categories'][0]['name'] }}</small>
					</div>
					<h4>{{ $explore['name'] }}</h4>
					<p>
					@foreach ($explore['location']['formattedAddress'] as $address)
						{{ $address }}
					@endforeach
					</p>
				</div>
			</div>
			<!-- /review_listing grid -->
		@empty
    	@endforelse
    </div>
    <!-- /row -->
</div>
<!-- /isotope-wrapper -->