				<aside class="col-lg-3" id="sidebar">
					<div id="filters_col">
						<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
						<div class="collapse show" id="collapseFilters">
							<div class="filter_type date_filter">
								<h6>Section</h6>
								<ul>
									@foreach ($sections as $section)
									<li>
										<label class="container_radio">{{ ucfirst($section) }}
											<input type="radio" name="section" value="{{ $section }}" class="selected" {{ (request()->get('section') == $section) ? 'checked' : '' }}>
											<span class="checkmark"></span>
										</label>
									</li>
									@endforeach
								</ul>
							</div>
							<div class="filter_type">
								<h6>Category</h6>
								<ul>
								@foreach ($categories as $category)
									<li>
										<label class="container_check fw6">{{ $category['name'] }}
											<input type="checkbox" name="query" value="{{ $category['id'] }}" data-val="{{ $category['name'] }}">
											<span class="checkmark"></span>
										</label>
										@if(!empty($category['categories'])) <ul class="sub_category"> @endif
										@foreach ($category['categories'] as $sub)
											<li class="ml-2">
												<label class="container_check fw6">{{ $sub['name'] }}
													<input type="checkbox" name="query" value="{{ $sub['id'] }}" data-main="{{ $category['id'] }}" data-val="{{ $sub['name'] }}">
													<span class="checkmark"></span>
												</label>
												@if(!empty($sub['categories'])) <ul class="child_category"> @endif
												@foreach ($sub['categories'] as $child)
													<li class="ml-3">
														<label class="container_check fw5">{{ $child['name'] }}
															<input type="checkbox" name="query" value="{{ $child['id'] }}" data-main="{{ $sub['id'] }}" data-val="{{ $child['name'] }}">
															<span class="checkmark"></span>
														</label>
														@if(!empty($child['categories'])) <ul class="parent_category"> @endif
														@foreach ($child['categories'] as $parent)
															<li class="ml-4">
																<label class="container_check fw4">{{ $parent['name'] }}
																	<input type="checkbox" name="query" value="{{ $parent['id'] }}" data-main="{{ $child['id'] }}" data-val="{{ $parent['name'] }}">
																	<span class="checkmark"></span>
																</label>
															</li>
														@endforeach
														@if(!empty($child['categories'])) </ul> @endif
													</li>
												@endforeach
												@if(!empty($sub['categories'])) </ul> @endif
											</li>
										@endforeach
										@if(!empty($category['categories'])) </ul> @endif
									</li>
								@endforeach
								</ul>
							</div>
						</div>
						<!--/collapse -->
					</div>
					<!--/filters col-->
				</aside>
				<!-- /aside -->