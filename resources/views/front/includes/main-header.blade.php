
<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo" href="index.html">
                        <img src="{{asset('assets/front/img/logos/black-logo.png')}}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav justify-content-end ml-auto">
              

                        @auth()
                      
            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{Auth::user()->name}}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="contact-3.html">My Profle</a>
                                    <a class="dropdown-item"  href="contact-3.html"><i class="sl sl-icon-power"></i>contact</a>
                                    <a href="{{route('logout')}}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:non;">{{csrf_field()}}</form>
                                </div>
                                
                            </li>
                            @endauth
           
                            <li class="nav-item sb2">
                                <a  href="submit-property.html" class="submit-btn">
                                    Submit Property
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->