		
@extends('layouts.dashboard.admin')
@section('content')

		<!-- page content -->
		<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Categories</h3>
						</div>

					
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Create<small>Category</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
							
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form class="form" action="{{route('admin.categories.store')}}" method="POST"
									enctype="multipart/form-data">
									@csrf

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name Of Category <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" value="{{old('name')}}" id="name"
												class="form-control"
												placeholder=""
												name="name">
												@error("name")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>


										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Slug<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="abbr"
                                              class="form-control"
                                              placeholder="  "
                                              value="{{old('slug')}}"
                                              name="slug">
											  @error("slug")
                                              <span class="text-danger">{{$message}}</span>
                                              @enderror
											</div>
										</div>
										


										<div class="row hidden" id="cats_list" >
											<label class="col-form-label col-md-3 col-sm-3 label-align">Choose Category</label>
											<div class="col-md-6 col-sm-6">
												<select name="parent_id" class="form-control">
														<optgroup>
														@if($categories && $categories -> count() > 0)
															@foreach($categories as $category)
																<option value="{{$category ->id }}">{{$category ->name}}</option>
															@endforeach
														@endif
														</optgroup>
												</select>
												@error('parent_id')
                                                <span class="text-danger"> {{$message}}</span>
                                                @enderror
											</div>
										</div>
										<br><br>
								

									


							
				
							<div class="form-group mt-1">
									
									<input type="radio"
											name="type"
											value="1"
											checked
											class="switchery"
											data-color="success"
											onclick="show1();" />

									 <label
										 class="card-title ml-1">
										 Category
									 </label>

								 </div>

								 

								 <div class="form-group mt-1">
                                       <input type="radio"
                                               name="type"
                                               value="2"
                                               class="switchery" data-color="success" onclick="show2();"/> 
                                        <label
                                            class="card-title ml-1">
                                            SubCategory
                                        </label>

                                    </div>

									<div class="form-group">
                                              <label for="eventInput1">Status </label>
                                           
                                                <input type="checkbox" value="1"
                                                name="is_active"
                                                id="switcheryColor4"
                                                class="switchery" data-color="success"
                                                checked/>
												<label for="switcheryColor4"
												class="card-title ml-1">Active</label>
                
												@error("is_active")
												<span class="text-danger">{{$message}}</span>
												@enderror
                                        </div>

						
								
								
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>

							
								</div>
							</div>
						</div>
					</div>

				
					
				</div>
			</div>
			<!-- /page content -->

@stop

