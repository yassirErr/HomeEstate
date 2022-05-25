<!-- Top header start -->
<header class="top-header th-bg" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-7">
                <div class="list-inline">
                    <a href="tel:1-7X0-555-8X22"><i class="fa fa-phone"></i>+0477 85X6 552</a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>info@themevessel.com</a>
                    <a href="#" class="mr-0"><i class="fa fa-clock-o"></i>Mon - Sun: 8:00am - 6:00pm</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5">
                <ul class="top-social-media pull-right">
                @guest()
                    <li>
                  
                        <a href="{{route('login')}}" class="sign-in"><i class="fa fa-sign-in"></i> Login </a>
                       
                    </li>
                   
                    <li>
                        <a href="{{route('register')}}" class="sign-in"><i class="fa fa-user"></i> Register</a>
                    </li>
  
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->