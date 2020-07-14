@extends('layouts.default')
@section('content')
	<main>
		<div id="results">
		   <div class="container">
			   <div class="row justify-content-between">
				   <div class="col-lg-3 col-md-4 col-10">
					   <h1><strong>145</strong> result for "All categories"</h1>
				   </div>
			   </div>
			   <!-- /row -->
		   </div>
		   <!-- /container -->
	   </div>
	   <!-- /results -->
		
		<div class="container margin_60_35">
			<div class="row">
				@include('aside.filter')
				<div class="col-lg-9">
					<input type="hidden" name="counter" value="0">
			    	<div id="aside_list">
			    	</div>
					<hr id="read_more">
					<div class="d-flex justify-content-center" role="status">
						<div class="spinner-grow text-primary text-center">
						  <span class="sr-only">Loading...</span>
						</div>
					</div>
				</div>
				<!-- /col -->
			</div>		
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
@stop

@section('scripts')
<script>
$(document).ready(function() {
	$(document).on('change', 'input[type="radio"][name^="section"]', function(e) {
		e.preventDefault();
		$val = this.value;
		$name = $(this).attr('name');
		$url = new URL(window.location.href);

		if($url.searchParams.has($name) === true){
			$url.searchParams.delete($name);
			$url.searchParams.set($name, $val);
		}else{
			$url.searchParams.set($name, $val);
		}

		if($val == 'all'){
			$url.searchParams.delete($name);
		}

		window.history.pushState('', '', $url);
		getContent();
	});

	$(document).on('change', 'input[type="checkbox"][name^="query"]', function(e) {
		e.preventDefault();
		$main = $(this).data('main');
		$parent = $(':checkbox[name=query][value="'+$main+'"]').data('main');
		$val = this.value;
		$checked = this.checked;
		$name = $(this).attr('name');
		$dataval = $(this).data('val');
		$url = new URL(window.location.href);
		
		if($url.searchParams.has($name) === true){
			$url.searchParams.delete($name);
			if($checked == true){
				$url.searchParams.set($name, $dataval);
			}
		}else{
			if($checked == true){
				$url.searchParams.set($name, $dataval);
			}else{
				$url.searchParams.delete($name);
			}
		}

		window.history.pushState('', '', $url);
		getContent();

		$('[name="section"]').prop('checked', false);
		$(':checkbox[name=query][value!="'+$val+'"]').prop('checked', false);
		$(':checkbox[name=query][value="'+$val+'"]').prop('checked', this.checked);
		$(':checkbox[name=query][value="'+$main+'"]').prop('checked', this.checked);
		$(':checkbox[name=query][value="'+$parent+'"]').prop('checked', this.checked);
	});

	function getContent(){
		$params = new URLSearchParams(window.location.search);
		$offset = $('[name^="counter"]').val();
		$limit = 4;
		$('[role="status"]').removeAttr('style');
		$('#aside_list').empty();

		$.get('show', {
			query: $params.get('query'), 
			section: $params.get('section'), 
			offset: $offset, 
			limit: $limit
		}, function(data) {
		}).done(function(data) {
		   	$('[role="status"]').attr('style', 'display: none !important;');
		   	$(data).insertBefore('#aside_list');

			var waypoints = $('#read_more').waypoint({
			  handler: function(direction) {
			    if(direction == 'down'){
			    	$('[name^="counter"]').val(parseFloat(parseInt($('[name^="counter"]').val()) + parseInt(4)));
			    	getContent();
			    	console.log($('[name^="counter"]').val());
			    }
			  }
			});
		});
	}

	getContent();

});
</script>
@stop