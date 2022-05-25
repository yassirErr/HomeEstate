		
@extends('layouts.dashboard.admin')
@section('content')

		<!-- page content -->
		<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Cities</h3>
						</div>

					
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Create<small>Cities</small></h2>
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
                          <form class="form"
                                action="{{route('admin.properties.price.store')}}"
                                method="POST"
                                enctype="multipart/form-data">
                              @csrf

                              <input type="hidden" name="property_id" value="{{$id}}">
                              <div class="form-body">

                                  <h4 class="form-section"><i class="ft-home"></i>Basic data of the product</h4>
                                  <div class="row">
                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="projectinput1"> Total price
                                              </label>
                                              <input type="number" id="total_price"
                                                     class="form-control"
                                                     placeholder="  "
                                                     value="{{old('total_price')}}"
                                                     name="total_price">
                                              @error("total_price")
                                              <span class="text-danger">{{$message}}</span>
                                              @enderror
                                          </div>
                                      </div>

                                      <div class="col-md-6">
                                          <div class="form-group">
                                              <label for="projectinput1"> Square meter Price
                                              </label>
                                              <input type="number"
                                                     class="form-control"
                                                     placeholder="  "
                                                     value="{{old('price_meter')}}"
                                                     name="price_meter">
                                              @error("price_meter")
                                              <span class="text-danger">{{$message}}</span>
                                              @enderror
                                          </div>
                                      </div>
                                  </div>



                              </div>


                              <div class="form-actions">
                                  <button type="button" class="btn btn-warning mr-1"
                                          onclick="history.back();">
                                      <i class="ft-x"></i> Back
                                  </button>
                                  <button type="submit" class="btn btn-primary">
                                      <i class="la la-check-square-o"></i> Submit
                                  </button>
                              </div>
                          </form>

                      </div>
                  </div>
              </div>
          </div>
      </div>

      
  
</div>
  @endsection