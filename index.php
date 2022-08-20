<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
  <link href="assets/images/faviconnew.png" rel="icon" />
  <title>kdtex travels</title>
  <meta name="description" content="Flights,htoels and travel booking agency website">
  <meta name="author" content="kdtex technologies">

<!-- Web Fonts
  ============================================= -->
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
  ============================================= -->
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/vendor/owl.carousel/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/vendor/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css" />
</head>
<body>
  <!-- Preloader -->
  <div id="preloader"><div data-loader="dual-ring"></div></div><!-- Preloader End -->

<!-- Document Wrapper   
  ============================================= -->
  <div id="main-wrapper"> 

  <!-- Header
    ============================================= -->
    <header id="header">
      <div class="container">
        <div class="header-row">
          <div class="header-column justify-content-start"> 

          <!-- Logo
            ============================================= -->
            <div class="logo"> <a href="index.html" title="kdtex travels"><img src="..assets/images/logonew.png" alt="kdtex travels" width="127" height="29" /></a> </div>
            <!-- Logo end --> 
            
          </div>
          <div class="header-column justify-content-end"> 

          <!-- Primary Navigation
            ============================================= -->
            <nav class="primary-menu navbar navbar-expand-lg nav-primary-dropdown">
              <div id="header-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                  <li class=""> <a class="" href="index.html">Home</a>
                  </li>
                <li class="login-signup ml-lg-2"><a class="pl-lg-4 pr-0" data-toggle="modal" data-target="#login-signup" href="#" title="Login / Sign up">Book Flight <span class="d-none d-lg-inline-block"><i class="fas fa-user"></i></span></a></li>
              </ul>
            </div>
          </nav>
          <!-- Primary Navigation end --> 
        </div>
        
        <!-- Collapse Button
          ============================================= -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"> <span></span> <span></span> <span></span> </button>
        </div>
      </div>
    </header>
    <!-- Header end --> 
    
  <!-- Content
    ============================================= -->
    <div id="content">
      <div class="hero-wrap py-2 py-md-3 py-lg-5">
        <div class="hero-mask opacity-3 bg-dark"></div>
        <div class="hero-bg" style="background-image:url('assets/images/bg/image-2.jpg');"></div>
        <div class="hero-content py-3 py-lg-5 my-3 my-md-5">
          <div class="container">
            <!-- Tabs --> 
            <ul class="nav nav-tabs style-2" id="myTab" role="tablist">
              <li class="nav-item"> <a class="nav-link active" id="hotels-tab" data-toggle="tab" href="#hotels" role="tab" aria-controls="hotels" aria-selected="true">Hotels</a> </li>
              <li class="nav-item"> <a class="nav-link" id="flights-tab" data-toggle="tab" href="#flights" role="tab" aria-controls="flights" aria-selected="true">Flights</a> </li>
          </ul>
          <div class="tab-content bg-light shadow-md rounded rounded-top-0 px-4 pt-4 pb-2" id="myTabContent"> 

            <!-- Search Hotels -->
            <div class="tab-pane fade show active" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
              <h2 class="text-4 mb-3">Book Domestic and International Hotels</h2>
              <form id="bookingHotels" method="post">
                <div class="form-row">
                  <div class="col-md-12 col-lg form-group">
                    <input type="text" class="form-control" autocomplete="home city" id="hotelsFrom" required placeholder="Enter City/Hotel">
                    <span class="icon-inside"><i class="fas 
                      fa-map-marker-alt"></i></span> </div>
                      <div class="col-md-6 col-lg form-group">
                        <input id="hotelsCheckIn" type="text" class="form-control" required placeholder="Check In">
                        <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                        <div class="col-md-6 col-lg form-group">
                          <input id="hotelsCheckOut" type="text" class="form-control" required placeholder="Check Out">
                          <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                          <div class="col-md-6 col-lg travellers-class form-group">
                            <input type="text" id="hotelsTravellersClass" class="travellers-class-input form-control" name="hotels-travellers-class" placeholder="Rooms / People" required onkeypress="return false;">
                            <span class="icon-inside"><i class="fas fa-caret-down"></i></span>
                            <div class="travellers-dropdown" style="display: none;">
                              <div class="row align-items-center">
                                <div class="col-sm-7">
                                  <p class="mb-sm-0">Rooms</p>
                                </div>
                                <div class="col-sm-5">
                                  <div class="qty input-group">
                                    <div class="input-group-prepend">
                                      <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#hotels-rooms" data-toggle="spinner">-</button>
                                    </div>
                                    <input type="text" data-ride="spinner" id="hotels-rooms" class="qty-spinner form-control" value="1" readonly>
                                    <div class="input-group-append">
                                      <button type="button" class="btn bg-light-4" data-value="increase" data-target="#hotels-rooms" data-toggle="spinner">+</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr class="mt-2 mb-4">
                              <div class="row align-items-center">
                                <div class="col-sm-7">
                                  <p class="mb-sm-0">Adults <small class="text-muted">(12+ yrs)</small></p>
                                </div>
                                <div class="col-sm-5">
                                  <div class="qty input-group">
                                    <div class="input-group-prepend">
                                      <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#adult-travellers" data-toggle="spinner">-</button>
                                    </div>
                                    <input type="text" data-ride="spinner" id="adult-travellers" class="qty-spinner form-control" value="1" readonly>
                                    <div class="input-group-append">
                                      <button type="button" class="btn bg-light-4" data-value="increase" data-target="#adult-travellers" data-toggle="spinner">+</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <hr class="my-2">
                              <div class="row align-items-center">
                                <div class="col-sm-7">
                                  <p class="mb-sm-0">Children <small class="text-muted">(1-12 yrs)</small></p>
                                </div>
                                <div class="col-sm-5">
                                  <div class="qty input-group">
                                    <div class="input-group-prepend">
                                      <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#children-travellers" data-toggle="spinner">-</button>
                                    </div>
                                    <input type="text" data-ride="spinner" id="children-travellers" class="qty-spinner form-control" value="0" readonly>
                                    <div class="input-group-append">
                                      <button type="button" class="btn bg-light-4" data-value="increase" data-target="#children-travellers" data-toggle="spinner">+</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <button class="btn btn-primary btn-block submit-done mt-3" type="button">Done</button>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg form-group">
                            <button class="btn btn-primary btn-block" type="submit">Search</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- Search Flight -->
                    <div class="tab-pane fade" id="flights" role="tabpanel" aria-labelledby="flights-tab">
                      <h2 class="text-4 mb-3">Book Domestic and International Flights</h2>
                      <form id="bookingFlight" method="GET">
                        <div class="mb-3">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input id="oneway" name="flight-trip" class="custom-control-input" checked="" required type="radio">
                            <label class="custom-control-label" for="oneway">One Way</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input id="roundtrip" name="flight-trip" class="custom-control-input" required type="radio">
                            <label class="custom-control-label" for="roundtrip">Round Trip</label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-6 col-lg-2 form-group">
                            <input type="text" class="form-control" id="flightFrom" required placeholder="From">
                            <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                            <div class="col-md-6 col-lg-2 form-group">
                              <input type="text" class="form-control" id="flightTo" required placeholder="To">
                              <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                              <div class="col-md-6 col-lg-2 form-group">
                                <input id="flightDepart" type="text" class="form-control" required placeholder="Depart Date">
                                <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                                <div class="col-md-6 col-lg-2 form-group">
                                  <input id="flightReturn" type="text" class="form-control" required placeholder="Return Date">
                                  <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                                  <div class="col-md-6 col-lg-2 travellers-class form-group">
                                    <input type="text" id="flightTravellersClass" class="travellers-class-input form-control" name="flight-travellers-class" placeholder="Travellers, Class" readonly required onkeypress="return false;">
                                    <span class="icon-inside"><i class="fas fa-caret-down"></i></span> 
                                    <!-- Travellers & Class Dropdown -->
                                    <div class="travellers-dropdown">
                                      <div class="row align-items-center">
                                        <div class="col-sm-7">
                                          <p class="mb-sm-0">Adults <small class="text-muted">(12+ yrs)</small></p>
                                        </div>
                                        <div class="col-sm-5">
                                          <div class="qty input-group">
                                            <div class="input-group-prepend">
                                              <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#flightAdult-travellers" data-toggle="spinner">-</button>
                                            </div>
                                            <input type="text" data-ride="spinner" id="flightAdult-travellers" class="qty-spinner form-control" value="1" readonly>
                                            <div class="input-group-append">
                                              <button type="button" class="btn bg-light-4" data-value="increase" data-target="#flightAdult-travellers" data-toggle="spinner">+</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr class="my-2">
                                      <div class="row align-items-center">
                                        <div class="col-sm-7">
                                          <p class="mb-sm-0">Children <small class="text-muted">(2-12 yrs)</small></p>
                                        </div>
                                        <div class="col-sm-5">
                                          <div class="qty input-group">
                                            <div class="input-group-prepend">
                                              <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#flightChildren-travellers" data-toggle="spinner">-</button>
                                            </div>
                                            <input type="text" data-ride="spinner" id="flightChildren-travellers" class="qty-spinner form-control" value="0" readonly>
                                            <div class="input-group-append">
                                              <button type="button" class="btn bg-light-4" data-value="increase" data-target="#flightChildren-travellers" data-toggle="spinner">+</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr class="my-2">
                                      <div class="row align-items-center">
                                        <div class="col-sm-7">
                                          <p class="mb-sm-0">Infants <small class="text-muted">(Below 2 yrs)</small></p>
                                        </div>
                                        <div class="col-sm-5">
                                          <div class="qty input-group">
                                            <div class="input-group-prepend">
                                              <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#flightInfants-travellers" data-toggle="spinner">-</button>
                                            </div>
                                            <input type="text" data-ride="spinner" id="flightInfants-travellers" class="qty-spinner form-control" value="0" readonly>
                                            <div class="input-group-append">
                                              <button type="button" class="btn bg-light-4" data-value="increase" data-target="#flightInfants-travellers" data-toggle="spinner">+</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <hr class="mt-2">
                                      <div class="mb-3">
                                        <div class="custom-control custom-radio">
                                          <input id="flightClassEconomic" name="flight-class" class="flight-class custom-control-input" value="0" checked="" required type="radio">
                                          <label class="custom-control-label" for="flightClassEconomic">Economic</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                          <input id="flightClassPremiumEconomic" name="flight-class" class="flight-class custom-control-input" value="1" required type="radio">
                                          <label class="custom-control-label" for="flightClassPremiumEconomic">Premium Economic</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                          <input id="flightClassBusiness" name="flight-class" class="flight-class custom-control-input" value="2" required type="radio">
                                          <label class="custom-control-label" for="flightClassBusiness">Business</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                          <input id="flightClassFirstClass" name="flight-class" class="flight-class custom-control-input" value="3" required type="radio">
                                          <label class="custom-control-label" for="flightClassFirstClass">First Class</label>
                                        </div>
                                      </div>
                                      <button class="btn btn-primary btn-block submit-done" type="button">Done</button>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-lg-2 form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Search</button>
                                  </div>
                                </div>
                              </form>
                            </div>      
                          </div>
                        </div><!-- Tabs End --> 
                      </div>
                    </div>
                  </div>

    <!-- Welcome Text
      ============================================= -->
      <section class="section bg-light-3">
        <div class="container text-center">
          <h2 class="text-9 font-weight-400">Online Booking. Save Time and Money!</h2>
          <p class="lead text-dark">Book your tickets online through Hovapay Travels and save on every transaction. Be sure for a memorable & secure journey with great services and exclusive discounts! </p>
          <a class="btn btn-secondary" data-toggle="modal" data-target="#login-signup" href="#" title="Sign Up">Login / Sign Up</a> </div>
        </section>
        <!-- Welcome Text end --> 
        
    <!-- Banner
      ============================================= -->
      <section class="bg-light shadow-md">
        <div class="row no-gutters banner ">
          <div class="col-sm-6 col-lg-3">
            <div class="item"> <a href="#">
              <div class="caption">
                <h2>10% OFF</h2>
                <p>On Metro Booking</p>
              </div>
              <div class="banner-mask"></div>
              <img class="img-fluid" src="assets/images/slider/small-banner-13-600x320.jpg" alt="banner"> </a> </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="item"> <a href="#">
                <div class="caption">
                  <h2>15% OFF</h2>
                  <p>On electricity Bill Payment</p>
                </div>
                <div class="banner-mask"></div>
                <img class="img-fluid" src="assets/images/slider/small-banner-14-600x320.jpg" alt="banner"> </a> </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="item"> <a href="#">
                  <div class="caption">
                    <h2>10% OFF</h2>
                    <p>On Metro Booking</p>
                  </div>
                  <div class="banner-mask"></div>
                  <img class="img-fluid" src="assets/images/slider/small-banner-13-600x320.jpg" alt="banner"> </a> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="item"> <a href="#">
                    <div class="caption">
                      <h2>10% OFF</h2>
                      <p>On DTH Recharge</p>
                    </div>
                    <div class="banner-mask"></div>
                    <img class="img-fluid" src="assets/images/slider/small-banner-15-600x320.jpg" alt="banner"> </a> </div>
                  </div>
                </div>
              </section>
              <!-- Banner end -->
              
    <!-- Popular Routes
      ============================================= -->
      <section class="section bg-light shadow-md rounded">
        <div class="container"> 
          <h2 class="text-9 font-weight-500 text-center">Start your travel planning here</h2>
          <p class="lead text-center mb-5">Search Hotels, Flights, Trains & Bus</p>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="accordion accordion-alternate popularRoutes mx-lg-2" id="popularRoutes">
                <div class="card">
                  <div class="card-header" id="one">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> New Delhi <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="one" data-parent="#popularRoutes">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - New Delhi <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - New Delhi <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - New Delhi <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - New Delhi <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - New Delhi <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - New Delhi <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Bhopal To Indore <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Bangalore to Chennai <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - New Delhi <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="two">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Bengaluru <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="two" data-parent="#popularRoutes">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - Bengaluru <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - Bengaluru <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - Bengaluru <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - Bengaluru <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - Bengaluru <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Bengaluru <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - Bengaluru <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Bengaluru <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - Bengaluru <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="three">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Chennai <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="three" data-parent="#popularRoutes">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - Chennai <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - Chennai <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - Chennai <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - Chennai <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - Chennai <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Chennai <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - Chennai <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Chennai <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - Chennai <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="four">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> Mumbai <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="four" data-parent="#popularRoutes">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - Mumbai <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - Mumbai <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - Mumbai <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - Mumbai <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - Mumbai <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Mumbai <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - Mumbai <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Mumbai <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - Mumbai <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="five">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Hyderabad <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseFive" class="collapse" aria-labelledby="five" data-parent="#popularRoutes">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - Hyderabad <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - Hyderabad <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - Hyderabad <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - Hyderabad <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - Hyderabad <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Hyderabad <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - Hyderabad <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Hyderabad <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - Hyderabad <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="accordion accordion-alternate popularRoutes mx-lg-2" id="popularRoutes2">
                <div class="card">
                  <div class="card-header" id="six">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> Chicago <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseSix" class="collapse" aria-labelledby="six" data-parent="#popularRoutes2">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - Chicago <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - Chicago <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - Chicago <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - Chicago <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - Chicago <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Chicago <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Bhopal To Chicago <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Bangalore to Chicago <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - Chicago <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="seven">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo"> New York <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseSeven" class="collapse" aria-labelledby="seven" data-parent="#popularRoutes2">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - New York <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - New York <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - New York <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - New York <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - New York <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - New York <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - New York <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - New York <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - New York <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="eight">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"> London <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseEight" class="collapse" aria-labelledby="eight" data-parent="#popularRoutes2">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - London <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - London <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - London <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - London <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - London <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - London <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - London <span class="ml-auto">$ 1,209+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="nine">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine"> Panaji <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseNine" class="collapse" aria-labelledby="nine" data-parent="#popularRoutes2">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - Panaji <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - Panaji <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - Panaji <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - Panaji <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - Panaji <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Panaji <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - Panaji <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Panaji <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - Panaji <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="ten">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen"> Ahmedabad <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseTen" class="collapse" aria-labelledby="ten" data-parent="#popularRoutes2">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - Ahmedabad <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - Ahmedabad <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - Ahmedabad <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - Ahmedabad <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - Ahmedabad <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Ahmedabad <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - Ahmedabad <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Ahmedabad <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - Ahmedabad <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="accordion accordion-alternate popularRoutes mx-lg-2" id="popularRoutes3">
                <div class="card">
                  <div class="card-header" id="eleven">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven"> Bangkok <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseEleven" class="collapse" aria-labelledby="eleven" data-parent="#popularRoutes3">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - Bangkok <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - Bangkok <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - Bangkok <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - Bangkok <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - Bangkok <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Bangkok <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - Bangkok <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Bangkok <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - Bangkok <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="twelve">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve"> Singapore <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseTwelve" class="collapse" aria-labelledby="twelve" data-parent="#popularRoutes3">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - Singapore <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - Singapore <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - Singapore <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - Singapore <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - Singapore <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Singapore <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Bhopal To Singapore <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Bangalore to Singapore <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - Singapore <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="thirteen">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen"> Los Angeles <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseThirteen" class="collapse" aria-labelledby="thirteen" data-parent="#popularRoutes3">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - Los Angeles <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - Los Angeles <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - Los Angeles <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - Los Angeles <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - Los Angeles <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Los Angeles <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - Los Angeles <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Los Angeles <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - Los Angeles <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="fourteen">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen"> San Francisco <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseFourteen" class="collapse" aria-labelledby="fourteen" data-parent="#popularRoutes3">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - San Francisco <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - San Francisco <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - San Francisco <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - San Francisco <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - San Francisco <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - San Francisco <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - San Francisco <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - San Francisco <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - San Francisco <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="fifteen">
                    <h5 class="collapsed mb-0" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">Hong Kong <span class="nav"><a href="#">HOTELS</a><a href="#">FLIGHTS</a><a href="#">TRAINS</a><a href="#">BUS</a></span> </h5>
                  </div>
                  <div id="collapseFifteen" class="collapse" aria-labelledby="fifteen" data-parent="#popularRoutes3">
                    <div class="card-body">
                      <ul class="routes-list">
                        <li><i class="fas fa-bed"></i></li>
                        <li><a href="#">The Orchid Hotel <span class="ml-auto">$ 210+</span></a></li>
                        <li><a href="#">Whistling Meadows Resort <span class="ml-auto">$ 675+</span></a></li>
                        <li><a href="#">Radisson Blu Hotel <span class="ml-auto">$ 280+</span></a></li>
                        <li><a href="#">The Lotus Hotel <span class="ml-auto">$ 412+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-plane"></i></li>
                        <li><a href="#">Jaipur - Hong Kong <span class="ml-auto">$ 1,015+</span></a></li>
                        <li><a href="#">Varanasi - Hong Kong <span class="ml-auto">$ 3,152+</span></a></li>
                        <li><a href="#">Amritsar - Hong Kong <span class="ml-auto">$ 4,137+</span></a></li>
                        <li><a href="#">Ahmedabad - Hong Kong <span class="ml-auto">$ 925+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-train"></i></li>
                        <li><a href="#">Surat - Hong Kong <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Hong Kong <span class="ml-auto">$ 1,999+</span></a></li>
                      </ul>
                      <ul class="routes-list">
                        <li><i class="fas fa-bus"></i></li>
                        <li><a href="#">Surat - Hong Kong <span class="ml-auto">$ 1,209+</span></a></li>
                        <li><a href="#">Kolkata - Hong Kong <span class="ml-auto">$ 1,999+</span></a></li>
                        <li><a href="#">Srinagar - Hong Kong <span class="ml-auto">$ 2,100+</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mt-4">
              <p class="text-center mb-0"><a href="#" class="btn btn-link">View All <i class="fas fa-arrow-right ml-1"></i></a></p>
            </div>
          </div>
        </div>
      </section><!-- Popular Routes end --> 
      
    <!-- Refer & Earn
      ============================================= -->
      <section class="section bg-light-3 px-5">
        <div class="container">
          <h2 class="text-9 font-weight-500 text-center">Refer & Earn</h2>
          <p class="lead text-center mb-5">Refer your friends and earn up to $20.</p>
          <div class="row">
            <div class="col-md-4">
              <div class="featured-box bg-light border px-4 py-5 rounded shadow-sm style-4">
                <div class="featured-box-icon bg-light-3 rounded-circle text-primary"> <span class="w-100 text-13 font-weight-600">1</span> </div>
                <h3>You Refer Friends</h3>
                <p class="text-3 mb-0">Share your referral link with friends. They get $10.</p>
              </div>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
              <div class="featured-box bg-light border px-4 py-5 rounded shadow-sm style-4">
                <div class="featured-box-icon bg-light-3 rounded-circle text-primary"> <span class="w-100 text-13 font-weight-600">2</span> </div>
                <h3>Your Friends Register</h3>
                <p class="text-3 mb-0">Your friends Register with using your referral link.</p>
              </div>
            </div>
            <div class="col-md-4 mt-4 mt-md-0">
              <div class="featured-box bg-light border px-4 py-5 rounded shadow-sm style-4">
                <div class="featured-box-icon bg-light-3 rounded-circle text-primary"> <span class="w-100 text-13 font-weight-600">3</span> </div>
                <h3>Earn You</h3>
                <p class="text-3 mb-0">You get $20. You can use these credits to take recharge.</p>
              </div>
            </div>
          </div>
          <div class="text-center pt-4"> <a href="#" class="btn btn-link">Get Started Earn <i class="fas fa-arrow-right ml-1"></i></a> </div>
        </div>
      </section>
      <!-- Refer & Earn end --> 
      
    <!-- Mobile App
      ============================================= -->
      <section class="section shadow-md bg-light pb-4">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-center"> <img class="img-fluid" alt="" src="..assets/images/mockup.png"> </div>
            <div class="col-lg-6 text-center text-lg-left">
              <h2 class="text-9 font-weight-500 my-4">Download Our Travels<br class="d-none d-lg-inline-block">
              Mobile App Now</h2>
              <p class="lead">Download our app for the fastest, most convenient way to Recharge & Bill Payment, Booking and more....</p>
              <div class="pt-3"> <a class="mr-4" href=""><img alt="" src="assets/images/app-store.png"></a><a href=""><img alt="" src="...assets/images/google-play-store.png"></a> </div>
            </div>
          </div>
        </div>
      </section><!-- Mobile App end -->
      
    </div>
    <!-- Content end --> 
    
  <!-- Footer
    ============================================= -->
    <footer id="footer" class="mt-0">
      <section class="hero-wrap bg-secondary shadow-md pt-4 pb-3">
        <div class="hero-bg" style="background-image:url('assets/images/bg/image-5.jpg');"></div>
        <div class="hero-content">
          <div class="container">
            <div class="row text-light">
              <div class="col-sm-6 col-md-3">
                <div class="featured-box style-1">
                  <div class="featured-box-icon text-light"> <i class="fas fa-lock"></i> </div>
                  <h4 class="text-light">100% Secure</h4>
                  <p>Moving your card details to a much more secured place.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="featured-box style-1">
                  <div class="featured-box-icon text-light"> <i class="fas fa-thumbs-up"></i> </div>
                  <h4 class="text-light">Trust pay</h4>
                  <p>100% Payment Protection. Easy Return Policy.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="featured-box style-1">
                  <div class="featured-box-icon text-light"> <i class="fas fa-bullhorn"></i> </div>
                  <h4 class="text-light">Refer & Earn</h4>
                  <p>Invite a friend to sign up and earn up to $100.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="featured-box style-1">
                  <div class="featured-box-icon text-light"> <i class="far fa-life-ring"></i> </div>
                  <h4 class="text-light">24X7 Support</h4>
                  <p>We're here to help. Have a query and need <a href="#">help</a> ?</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-4 mb-3 mb-md-0">
            <p>Payment</p>
            <ul class="payments-types">
              <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="assets/images/payment/visa.png" alt="visa" title="Visa"></a></li>
              <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="assets/images/payment/discover.png" alt="discover" title="Discover"></a></li>
              <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="assets/images/payment/paypal.png" alt="paypal" title="PayPal"></a></li>
              <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="assets/images/payment/american.png" alt="american express" title="American Express"></a></li>
              <li><a href="#" target="_blank"> <img data-toggle="tooltip" src="assets/images/payment/mastercard.png" alt="discover" title="Discover"></a></li>
            </ul>
          </div>
          <div class="col-md-4 mb-3 mb-md-0">
            <p>Subscribe</p>
            <div class="input-group newsletter">
              <input class="form-control" placeholder="Your Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="submit">Subscribe</button>
              </span> </div>
            </div>
            <div class="col-md-4 d-flex align-items-md-end flex-column">
              <p>Keep in touch</p>
              <ul class="social-icons social-icons-colored">
                <li class="social-icons-facebook"><a data-toggle="tooltip" href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li class="social-icons-twitter"><a data-toggle="tooltip" href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li class="social-icons-google"><a data-toggle="tooltip" href="http://www.google.com/" target="_blank" title="Google"><i class="fab fa-google"></i></a></li>
                <li class="social-icons-linkedin"><a data-toggle="tooltip" href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                <li class="social-icons-youtube"><a data-toggle="tooltip" href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                <li class="social-icons-instagram"><a data-toggle="tooltip" href="http://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-copyright">
            <ul class="nav justify-content-center">
              <li class="nav-item"> <a class="nav-link active" href="#">About Us</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Faq</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Support</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Terms of Use</a> </li>
              <li class="nav-item"> <a class="nav-link" href="#">Privacy Policy</a> </li>
            </ul>
            <p class="copyright-text">Copyright © 2022 <a href="#">kdtex Travels</a>. All Rights Reserved.</p>
          </div>
        </div>
      </footer>
      <!-- Footer end --> 
      
    </div>
    <!-- Document Wrapper end --> 

<!-- Back to Top
  ============================================= --> 
  <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a> 

<!-- Modal Dialog - Login/Signup
  ============================================= -->
  <div id="login-signup" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content p-sm-3">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a id="login-tab" class="nav-link active text-4" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
            <li class="nav-item"> <a id="signup-tab" class="nav-link text-4" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a> </li>
          </ul>
          <div class="tab-content pt-4">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
              <form id="loginForm" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" id="loginMobile" required placeholder="Mobile or Email ID">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
                </div>
                <div class="row mb-4">
                  <div class="col-sm">
                    <div class="form-check custom-control custom-checkbox">
                      <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-sm text-right"> <a class="justify-content-end" href="#">Forgot Password ?</a> </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Login</button>
              </form>
            </div>
            <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
              <form id="signupForm" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" data-bv-field="number" id="signupEmail" required placeholder="Email ID">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="signupMobile" required placeholder="Mobile Number">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="signuploginPassword" required placeholder="Password">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Signup</button>
              </form>
            </div>
            <div class="d-flex align-items-center my-4">
              <hr class="flex-grow-1">
              <span class="mx-2">OR</span>
              <hr class="flex-grow-1">
            </div>
            <div class="row">
              <div class="col-12 mb-3">
                <button type="button" class="btn btn-block btn-outline-primary">Login with Facebook</button>
              </div>
              <div class="col-12">
                <button type="button" class="btn btn-block btn-outline-danger">Login with Google</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Modal Dialog - Login/Signup end --> 

  <!-- Script --> 
  <script src="assets/vendor/jquery/jquery.min.js"></script> 
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script> 
  <script src="assets/vendor/bootstrap-spinner/bootstrap-spinner.js"></script> 
  <script src="assets/vendor/daterangepicker/moment.min.js"></script> 
  <script src="assets/vendor/daterangepicker/daterangepicker.js"></script> 
  <script>
    $(function() {
     'use strict';
  // Hotels Check In Date
  $('#hotelsCheckIn').daterangepicker({
    singleDatePicker: true,
    minDate: moment(),
    autoUpdateInput: false,
  }, function(chosen_date) {
    $('#hotelsCheckIn').val(chosen_date.format('MM-DD-YYYY'));
  });
  
  // Hotels Check Out Date
  $('#hotelsCheckOut').daterangepicker({
    singleDatePicker: true,
    minDate: moment(),
    autoUpdateInput: false,
  }, function(chosen_date) {
    $('#hotelsCheckOut').val(chosen_date.format('MM-DD-YYYY'));
  });
  
  // Flight Depart Date
  $('#flightDepart').daterangepicker({
    singleDatePicker: true,
    minDate: moment(),
    autoUpdateInput: false,
  }, function(chosen_date) {
    $('#flightDepart').val(chosen_date.format('MM-DD-YYYY'));
  });
  
  // Flight Return Date
  $('#flightReturn').daterangepicker({
    singleDatePicker: true,
    minDate: moment(),
    autoUpdateInput: false,
  }, function(chosen_date) {
    $('#flightReturn').val(chosen_date.format('MM-DD-YYYY'));
  });
  
  // Train Depart Date
  $('#trainDepart').daterangepicker({
    singleDatePicker: true,
    minDate: moment(),
    autoUpdateInput: false,
  }, function(chosen_date) {
    $('#trainDepart').val(chosen_date.format('MM-DD-YYYY'));
  });
  
  // Bus Depart Date
  $('#busDepart').daterangepicker({
    singleDatePicker: true,
    minDate: moment(),
    autoUpdateInput: false,
  }, function(chosen_date) {
    $('#busDepart').val(chosen_date.format('MM-DD-YYYY'));
  });
});
</script> 
<script src="assets/js/theme.js"></script>
</body>
</html>
