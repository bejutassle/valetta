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
				<div class="search_mob_wp">
					<div class="custom-search-input-2">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Search reviews...">
							<i class="icon_search"></i>
						</div>
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Where">
							<i class="icon_pin_alt"></i>
						</div>
						<select class="wide">
							<option>All Categories</option>	
							<option>Shops</option>
							<option>Hotels</option>
							<option>Restaurants</option>
							<option>Bars</option>
							<option>Events</option>
							<option>Fitness</option>
						</select>
						<input type="submit" value="Search">
					</div>
				</div>
				<!-- /search_mobile -->
		   </div>
		   <!-- /container -->
	   </div>
	   <!-- /results -->
		
		<div class="container margin_60_35">
			<div class="row">
			@include('aside.filter')

				<div class="col-lg-9">
					
					<div class="isotope-wrapper">
						<div class="row">

							<div class="col-md-6 isotope-item latest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar1.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Jhon Doe</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Avesome Experience"</h4>
									<p>Et nec tantas accusamus salutatus, sit commodo veritus te.Viderer petentium cu his. Tollit molestie suscipiantur his et...</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->

							<div class="col-md-6 isotope-item latest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar2.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Marika</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Great products"</h4>
									<p>Et nec tantas accusamus salutatus</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->

							<div class="col-md-6 isotope-item latest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar3.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Lukas Lee</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Excellent Support"</h4>
									<p>Mucius doctus constituto pri at, ne cetero postulant pro. At vix utinam corpora, ea oblique moderatius usu. Vix id viris consul honestatis, an constituto deterruisset consectetuer pro.....</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->
							<div class="col-md-6 isotope-item oldest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar4.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Mark Twain</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Shipping Very Fast"</h4>
									<p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut....</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->

							<div class="col-md-6 isotope-item oldest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar5.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Margaret</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Perfect"</h4>
									<p>Mucius doctus constituto pri at, ne cetero postulant pro. At vix utinam corpora, ea oblique moderatius usu. Vix id viris consul honestatis, an constituto deterruisset consectetuer pro.....</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->

							<div class="col-md-6 isotope-item oldest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar6.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Tom Jones</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Everything good"</h4>
									<p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut....</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->	
							<div class="col-md-6 isotope-item latest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar7.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Jhon Doe</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Avesome Experience"</h4>
									<p>Et nec tantas accusamus salutatus, sit commodo veritus te.Viderer petentium cu his. Tollit molestie suscipiantur his et...</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->

							<div class="col-md-6 isotope-item latest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar8.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Marika</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Great products"</h4>
									<p>Et nec tantas accusamus salutatus</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->

							<div class="col-md-6 isotope-item latest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Lukas Lee</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Excellent Support"</h4>
									<p>Mucius doctus constituto pri at, ne cetero postulant pro. At vix utinam corpora, ea oblique moderatius usu. Vix id viris consul honestatis, an constituto deterruisset consectetuer pro.....</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->
							<div class="col-md-6 isotope-item oldest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar3.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Mark Twain</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Shipping Very Fast"</h4>
									<p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut....</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->

							<div class="col-md-6 isotope-item oldest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar6.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Margaret</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Perfect"</h4>
									<p>Mucius doctus constituto pri at, ne cetero postulant pro. At vix utinam corpora, ea oblique moderatius usu. Vix id viris consul honestatis, an constituto deterruisset consectetuer pro.....</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->

							<div class="col-md-6 isotope-item oldest">
								<div class="review_listing">
									<div class="clearfix add_bottom_15">
										<figure><img src="assets/img/avatar8.jpg" alt=""></figure>
										<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
										<small>Shops</small>
									</div>
									<h3><strong>Tom Jones</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
									<h4>"Everything good"</h4>
									<p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut....</p>
									<ul class="clearfix">
										<li><small>Published: 26.08.2018</small></li>
										<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
									</ul>
								</div>
							</div>
							<!-- /review_listing grid -->	
						</div>
						<!-- /row -->
						</div>
						<!-- /isotope-wrapper -->

						<p class="text-center"><a href="#" class="btn_1 rounded add_top_15">Load more</a></p>

				</div>
				<!-- /col -->
			</div>		
		</div>
		<!-- /container -->
		
	</main>
	<!--/main-->
@stop