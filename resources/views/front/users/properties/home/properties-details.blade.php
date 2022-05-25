@extends('layouts.front.login-site')
@section('content')

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Property Detail</h1>
            <ul class="breadcrumbs">
         
                
                <li><a href="index.html">Home</a></li>
                <li class="active">Property Detail</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">
                    <div class="heading-properties-2">
                       <div class="row">
                           <div class="col-lg-12">
                               <div class="informeson">
                                   <h1>{{$property -> name}}<span>$ {{$property -> total_price}}</span></h1>
                                   <div>
                                       <div class="float-left">
                                           <ul class="clearfix">
                                               <li><i class="flaticon-bed"></i>{{$property -> rooms}} rooms </li>
                                               <li><i class="flaticon-bath"></i>{{$property -> bedrooms}} bedrooms </li>
                                               <li><i class="flaticon-square-layouting-with-black-square-in-east-area"></i>{{$property ->erea}} metter</li>
                                        
                                           </ul>
                                       </div>
                                       <div class="float-right">
                                           <p>$ {{$property -> price_meter}} / metre</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                    </div>
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="{{$property->images[0] -> photo ?? ''}}" class="img-fluid" alt="properties-photo">
                        </div>
                    
                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators sp-2 smail-properties list-inline nav nav-justified ">
                        @isset($property->images)
                        @foreach($property ->images as $image)
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                <img src="{{$image->photo}}" class="img-fluid" alt="properties-photo-smale">
                            </a>
                        </li>
                       @endforeach
                       @endisset 
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12 slider">
        
             
                <!-- Property description start -->
                <div class="property-description mb-60">
                    <h3 class="heading-3">Property Description</h3>
                    <p>{{$property -> description}} </p>
                </div>

                 // you can contunue ....!!!!
                <!-- Property details start -->
                <div class="property-details mb-45">
                    <h3 class="heading-3">Property Details</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <strong>Property Id:</strong>215
                                </li>
                                <li>
                                    <strong>Price:</strong>$1240/ Month
                                </li>
                                <li>
                                    <strong>Property Type:</strong>House
                                </li>
                                <li>
                                    <strong>Bathrooms:</strong>3
                                </li>
                                <li>
                                    <strong>Bathrooms:</strong>2
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <strong>Property Lot Size:</strong>800 ft2
                                </li>
                                <li>
                                    <strong>Land area</strong>230 ft2
                                </li>
                                <li>
                                    <strong>Year Built</strong>2018
                                </li>
                                <li>
                                    <strong>Available From</strong>2018
                                </li>
                                <li>
                                    <strong>Garages:</strong>2
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <strong>Sold:</strong>Yes
                                </li>
                                <li>
                                    <strong>City:</strong>Usa
                                </li>
                                <li>
                                    <strong>Parking:</strong>Yes
                                </li>
                                <li>
                                    <strong>Property Owner:</strong>Sohel Rana
                                </li>
                                <li>
                                    <strong>Zip Code: </strong>2451
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Amenities box start -->
                <div class="amenities-box af mb-45">
                    <h3 class="heading-3">Condition</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-draw-check-mark"></i> 3 Bedrooms</span></li>
                                <li><span><i class="flaticon-draw-check-mark"></i> 2 Bathroom</span></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-draw-check-mark"></i> 1 Garage</span></li>
                                <li><span><i class="flaticon-draw-check-mark"></i> 1 Balcony</span></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li><span><i class="flaticon-draw-check-mark"></i> 4800 sq ft</span></li>
                                <li><span><i class="flaticon-draw-check-mark"></i> TV</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Features opions start -->
                <div class="features-opions af mb-45">
                    <h3 class="heading-3">Features</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Air conditioning
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Wifi
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Swimming Pool
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Double Bed
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Balcony
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Telephone
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Garage
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Parking
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    TV
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Home Theater
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <ul>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Alarm
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Garage
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Gym
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Electric Range
                                </li>
                                <li>
                                    <i class="flaticon-draw-check-mark"></i>
                                    Private space
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Floor plans start -->
                <div class="floor-plans mb-60">
                    <h3 class="heading-3">Floor Plans</h3>
                    <table>
                        <tbody><tr>
                            <td><strong>Size</strong></td>
                            <td><strong>Rooms</strong></td>
                            <td><strong>Bathrooms</strong></td>
                        </tr>
                        <tr>
                            <td>1600</td>
                            <td>3</td>
                            <td>2</td>
                        </tr>
                        </tbody>
                    </table>
                    <img src="http://placehold.it/730x370" alt="floor-plans" class="img-fluid">
                </div>
                <!-- Property vedio start -->
                <div class="property-video mb-60">
                    <h3 class="heading-3">Property Vedio</h3>
                    <iframe src="https://www.youtube.com/embed/m5_AKjDdqaU"></iframe>
                </div>
                <!-- Section Location start -->
                <div class="section-location mb-60">
                    <h3 class="heading-3">Property Location</h3>
                    <div class="map">
                        <div id="contactMap" class="contact-map"></div>
                    </div>
                </div>
                <!-- Related properties start -->
                <div class="related-properties hedin-mb-30">
                    <h3 class="heading-3">Related Properties</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="property-box-7">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="tag-2">For Rent</div>
                                        <div class="price-box"><span>$850.00</span> Per night</div>
                                        <img src="http://placehold.it/350x233" alt="property" class="img-fluid">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Real Luxury Villa</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </div>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Area</span>3600 Sqft
                                    </li>
                                    <li>
                                        <span>Beds</span> 3
                                    </li>
                                    <li>
                                        <span>Baths</span> 2
                                    </li>
                                    <li>
                                        <span>Garage</span> 1
                                    </li>
                                </ul>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <p><i class="fa fa-user"></i> Jhon Doe</p>
                                    </div>
                                    <ul class="pull-right">
                                        <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                        <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="property-box-7">
                                <div class="property-thumbnail">
                                    <a href="properties-details.html" class="property-img">
                                        <div class="tag-2">For Sale</div>
                                        <div class="price-box"><span>$850.00</span> Per night</div>
                                        <img src="http://placehold.it/350x233" alt="property" class="img-fluid">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h1 class="title">
                                        <a href="properties-details.html">Beautiful Single Home</a>
                                    </h1>
                                    <div class="location">
                                        <a href="properties-details.html">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </div>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <span>Area</span>3600 Sqft
                                    </li>
                                    <li>
                                        <span>Beds</span> 3
                                    </li>
                                    <li>
                                        <span>Baths</span> 2
                                    </li>
                                    <li>
                                        <span>Garage</span> 1
                                    </li>
                                </ul>
                                <div class="footer clearfix">
                                    <div class="pull-left days">
                                        <p><i class="fa fa-user"></i> Jhon Doe</p>
                                    </div>
                                    <ul class="pull-right">
                                        <li><a href="#"><i class="flaticon-heart-shape-outline"></i></a></li>
                                        <li><a href="#"><i class="flaticon-calendar"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                    <!-- Search area start -->
                    <div class="widget search-area advanced-search as">
                        <h5 class="sidebar-title">Advanced Search</h5>
                        <div class="search-area-inner">
                            <div class="search-contents ">
                                <form method="GET">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="area">
                                            <option>Area From</option>
                                            <option>1500</option>
                                            <option>1200</option>
                                            <option>900</option>
                                            <option>600</option>
                                            <option>300</option>
                                            <option>100</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="Status">
                                            <option>Property Status</option>
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="Location">
                                            <option>Location</option>
                                            <option>United Kingdom</option>
                                            <option>American Samoa</option>
                                            <option>Belgium</option>
                                            <option>Canada</option>
                                            <option>Delaware</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="types">
                                            <option>Property Types</option>
                                            <option>Residential</option>
                                            <option>Commercial</option>
                                            <option>Land</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-30">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label>Area</label>
                                        <div class="range-slider">
                                            <div data-min="0" data-max="150000" data-unit="Sq ft" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label>Price</label>
                                        <div class="range-slider">
                                            <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <button class="search-button btn-md btn-color">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Categories start -->
                    <div class="widget categories">
                        <h5 class="sidebar-title">Categories</h5>
                        <ul>
                            <li><a href="#">Apartments<span>(12)</span></a></li>
                            <li><a href="#">Houses<span>(8)</span></a></li>
                            <li><a href="#">Family Houses<span>(23)</span></a></li>
                            <li><a href="#">Offices<span>(5)</span></a></li>
                            <li><a href="#">Villas<span>(63)</span></a></li>
                            <li><a href="#">Other<span>(7)</span></a></li>
                        </ul>
                    </div>
                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Recent Properties</h5>
                        <div class="media mb-4">
                            <a href="properties-details.html">
                                <img src="http://placehold.it/60x60" alt="sub-property">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Beautiful Single Home</a>
                                </h5>
                                <p>Feb 27, 2020 | $1045,000</p>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <a href="properties-details.html">
                                <img src="http://placehold.it/60x60" alt="sub-property-2">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Sweet Family Home</a>
                                </h5>
                                <p>Mar 14, 2020 | $944,000</p>
                            </div>
                        </div>
                        <div class="media">
                            <a href="properties-details.html">
                                <img src="http://placehold.it/60x60" alt="sub-property-3">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-details.html">Real Luxury Villa</a>
                                </h5>
                                <p>Apr 14, 2020 | $1420,000</p>
                            </div>
                        </div>
                    </div>
                    <!-- Social list start -->
                    <div class="social-list widget clearfix">
                        <h5 class="sidebar-title">Follow Us</h5>
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Sell Your Property -->
                    <div class="sell-your-properties">
                        <h3>Sell Your Property</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tortor dui, scelerisque ac nisi</p>
                        <p></p>
                        <a href="properties-details.html" class="btn btn-md btn-color">Register Now</a>
                    </div>
                    <!-- Financing calculator  start -->
                    <div class="contact-3 financing-calculator widget-3">
                        <h5 class="sidebar-title">Mortgage Calculator</h5>
                        <form action="#" method="GET" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-label">Property Price</label>
                                <input type="text" class="form-control" placeholder="$36.400">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Interest Rate (%)</label>
                                <input type="text" class="form-control" placeholder="10%">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Period In Months</label>
                                <input type="text" class="form-control" placeholder="10 Months">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Down PaymenT</label>
                                <input type="text" class="form-control" placeholder="$21,300">
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-color btn-md btn-message btn-block">Cauculate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page start -->

@endsection