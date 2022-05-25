    
@extends('layouts.dashboard.admin')
@section('content')
    
    <!-- page content -->
      <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>All <small> Users</small></h3>
              </div>

        
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Users</h2>
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
                            <th >Email</th>
                            <th >Edit</th>
                        
                        </tr>
                      </thead>


                      <tbody>
                      @isset($users)
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user ->name}}</td>
                    
                                    <td>{{$user ->email}}</td>
                                        <td>
                                            <div class="btn-group" role="group"
                                                    aria-label="Basic example">
                
                                                    <a href="{{route('admin.users.delete',$user -> id)}}"
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