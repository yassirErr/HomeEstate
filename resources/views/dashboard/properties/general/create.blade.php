		
@extends('layouts.dashboard.admin')
@section('content')

		<!-- page content -->
		<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Properties</h3>
						</div>

					
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Create<small>Properties</small></h2>
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
						

									<form class="form" action="{{route('admin.properties.general.store')}}" method="POST"
											enctype="multipart/form-data">
											@csrf

                      
                                <div class="row justify-content-md-center">
                                  <div class="col-md-8">
                                    <div class="form-body">

                              
                                      <div class="row">
                                        <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="eventInput1"> Properties name
                                              </label>
                                              <input type="text" id="name"
                                                    class="form-control"
                                                    placeholder="  "
                                                    value="{{old('name')}}"
                                                    name="name">
                                              @error("name")
                                              <span class="text-danger">{{$message}}</span>
                                              @enderror
                                          </div>
                                        </div>

                                        <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="eventInput1"> Building Age
                                              </label>
                                              <input type="text" id="building_age"
                                                    class="form-control"
                                                    placeholder="  "
                                                    value="{{old('building_age')}}"
                                                    name="building_age">
                                              @error("building_age")
                                              <span class="text-danger">{{$message}}</span>
                                              @enderror
                                          </div>
                                        </div>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventInput1"> Parking
                                            </label>
                                            <input type="text" id="parking"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('parking')}}"
                                                   name="parking">
                                            @error("parking")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventInput1"> Cooling
                                            </label>
                                            <input type="text" id="cooling"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('cooling')}}"
                                                   name="cooling">
                                            @error("cooling")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventInput1"> Heating
                                            </label>
                                            <input type="text" id="heating"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('heating')}}"
                                                   name="heating">
                                            @error("heating")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventInput1"> Sewer
                                            </label>
                                            <input type="text" id="sewer"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('sewer')}}"
                                                   name="sewer">
                                            @error("sewer")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventInput1"> Water
                                            </label>
                                            <input type="text" id="water"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('water')}}"
                                                   name="water">
                                            @error("water")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventInput1"> Exercise Room
                                            </label>
                                            <input type="text" id="exercise_room"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('exercise_room')}}"
                                                   name="exercise_room">
                                            @error("exercise_room")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                      </div>

                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="eventInput1"> torage Room
                                            </label>
                                            <input type="text" id="torage_room"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('torage_room')}}"
                                                   name="torage_room">
                                            @error("torage_room")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                      </div>

                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="eventInput1">Location
                                            </label>
                                            <input type="text" id="location"
                                                   class="form-control"
                                                   placeholder="  "
                                                   value="{{old('location')}}"
                                                   name="location">
                                            @error("location")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                      </div>

                                      </div>
                                    <h4 class="form-section"><i class="ft-navigation-2"></i> Details Info</h4><hr>
                                    <div class="row">
                                     
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="eventInput1"> Description
                                            </label>
                                            <textarea  name="description" id="description"
                                                  class="form-control"
                                                  placeholder="  "
                                            >{{old('description')}}</textarea>

                                            @error("description")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                 

                                    <div class="col-md-6">
                                      <div class=" form-group">
                                        <label for="eventInput1"
                                        for="first-name"> Slug
                                        </label>
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
                               
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="text-bold-600 font-medium-2">
                                                Choose the section
                                            </div>
                                            <select name="categories[]" class="select2 form-control" multiple>
                                                <optgroup label="Choose the section ">
                                                    @if($categories && $categories -> count() > 0)
                                                        @foreach($categories as $category)
                                                            <option
                                                                value="{{$category ->id }}">{{$category->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                            @error('categories.0')
                                            <span class="text-danger"> {{$message}}</span>
                                            @enderror
                                          </div>
                                        </div>

                                        <!-- <div class="control-group row">
                                          <label class="control-label col-md-3 col-sm-3 ">Input Tags</label>
                                          <div class="col-md-9 col-sm-9 ">
                                            <input name="categories[]" id="tags_1" type="text" class="tags form-control"  />
                                    
                                            <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;">
                                      
                                          </div>
                                          </div>
                                        </div> -->

                                          <div class="col-md-6">
                                          <div class="form-group">
                                            <label for="eventInput1">Choose the City
                                            </label>
                                            <select name="city_id" class="select2 form-control">
                                                <optgroup label="Select the City">
                                                    @if($cities && $cities -> count() > 0)
                                                        @foreach($cities as $cit)
                                                            <option
                                                                value="{{$cit->id }}">{{$cit ->name}}</option>
                                                        @endforeach
                                                    @endif
                                                </optgroup>
                                            </select>
                                            @error('city_id')
                                            <span class="text-danger"> {{$message}}</span>
                                            @enderror
                                        </div>
                                      </div>
                                    </div>

                                    <div class=" form-group">
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

                                </div>

							
                          
                                    </div>
                                  </div>

								  <div class="ln_solid"></div>
              
								<div class="item form-group">
									<div class="col-md-6 col-sm-6 offset-md-3">
									<button class="btn btn-primary" type="button" >Cancel</button>
									<button type="submit" class="btn btn-success">Submit</button>
									</div>
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
