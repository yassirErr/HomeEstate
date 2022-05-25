@extends('layouts.dashboard.login-admin')
@section('title','login')
@section('content')

<div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

    

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="{{route('admin.login')}}" method="post"
        novalidate>
        @csrf
              <h1> Admin Login</h1>
              @include('dashboard.includes.alerts.errors')
             @include('dashboard.includes.alerts.success')
              <div>
                <input type="text" class="form-control"  placeholder="Email" name="email"  value="{{old('email')}}" id="email" required="" />
                @error('email')
                  <span class="text-danger">{{$message}}</span>
                @enderror
              </div>


              <div>
                <input type="password" class="form-control"  name="password" 
                      id="user-password" placeholder="Password" required="" />
                  @error('password')
                    <span class="text-danger">{{$message}}</span>
                  @enderror
              </div>

              <div>
                  <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i>Login</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>Ecozone</h1>
                  <p>©2021 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

   
      </div>
    </div>
@endsection