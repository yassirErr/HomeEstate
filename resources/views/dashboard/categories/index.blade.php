    
@extends('layouts.dashboard.admin')
@section('content')
    
    <!-- page content -->
      <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>All <small> Categorie</small></h3>
              </div>

        
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Categories</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  
                  @include('dashboard.includes.alerts.success')
                  @include('dashboard.includes.alerts.errors')
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>

                            <th>Name </th> 
                            <th >Main section </th>
                            <th >Slug </th>
                            <th >Status </th>
                            <th >Edit</th>
                        
                        </tr>
                      </thead>


                      <tbody>
                      @isset($categories)
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category ->name}}</td>
                                    <td>{{$category ->_parent->name ?? ''}}</td>
                                    <td>{{$category ->slug}}</td>
                                    <td>{{$category ->getActive()}}</td>
                                    
                                    {{-- <td><img style="width: 200px ; height:100px" src=""></td> --}}
                                        <td>
                                            <div class="btn-group" role="group"
                                                    aria-label="Basic example">
                                                    <a href="{{route('admin.categories.edit',$category -> id)}}"
                                                    class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>
                
                
                                                    <a href="{{route('admin.categories.delete',$category -> id)}}"
                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>
                                            </div>
                                        </td>
                                </tr>
                            @endforeach
                          @endisset
                     
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>

            
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection