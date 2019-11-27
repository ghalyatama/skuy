<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Idenation</title>

        <!-- Styles -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- CSS Files -->
        <link href="css-ui/bootstrap.min.css" rel="stylesheet" />
        <link href="css-ui/gsdk-bootstrap-wizard.css" rel="stylesheet" />
        <link href="css-ui/bootstrap.min.css" rel="stylesheet" />
        <link href="css-ui/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

        <!-- Custom styles for this template -->
        <!-- <link href="css/shop-homepage.css" rel="stylesheet"> -->

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="css/demo.css" rel="stylesheet" />
        <!-- <link href="css/mystyle.css" rel="stylesheet" /> -->

    </head>

    <body class="landing-page index-page sidebar-collapse">

                <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
            <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                <span class="button-bar"></span>
                <span class="button-bar"></span>
                <span class="button-bar"></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-header">Dropdown header</a>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">One more separated link</a>
                </div>
            </div>

            <div class="navbar-translate">
                <a class="navbar-brand" href="#" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
                IDENATION
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
                </button>
            </div>
            <!-- <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="img/blurred-image-1.jpg">
                <ul class="navbar-nav"> -->

               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" rel="tooltip" data-placement="bottom" href="{{ url('/home') }}">Home</a>
                        </li>
                            <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a  class="dropdown-item" href="{{ route('profile') }}">
                                         {{ __('Profile') }} 
                                    </a>

                                    <!-- <a  class="dropdown-item" href="{{ url('/dashboard') }}">
                                         {{ __('Dashboard') }} 
                                    </a>

                                    <a  class="dropdown-item" href="{{ url('/booking') }}">
                                         {{ __('Booking List') }} 
                                    </a> -->

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            <!-- <li class="nav-item">
                                    <a class="btn btn-danger shadow-sm" href="{{ url('/createide') }}">
                                      <i class="fa fa-plus-square"></i>{{ __('Create Ide') }}
                                    </a>
                            </li> -->
                        @endguest
                    </ul>
                </div>
                <!-- </ul>
            </div> -->
            </div>
        </nav>
        <!-- End Navbar -->

        <div class="wrapper">
            <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image:url('img/header.jpg');">
            </div>
                <div class="container">
                    <div class="content-center brand">
                        <img class="n-logo" src="./assets/img/now-logo.png" alt="">
                            <h1 class="h1-seo">IDENATION</h1>
                                <h3>now you can realize your dreams.</h3>
                    </div>
                </div>
            </div>

        <div class="section section-about-us">
            <div class="container">
            <div class="row">
        @foreach($tampils as $tm)
              <div class="col-lg-4 col-md-6mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top" src="{{ asset('img/ide/'.$tm->image)  }}" alt="" style="max-height: 200px;" ></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a class="category text-primary" href="#">{{ $tm->nama }}</a>
                    </h4>
                    <p class="card-text text-truncate " style="max-width: 200px;">{{ $tm->Deskripsi }}</p>
                  </div>
                  
                  <div class="card-footer">
                    <!-- Button trigger modal -->
                      <div class="pull-right">
                        <a href= "{{ route('detail.ide', $tm->id) }}" method="post" role="button" class="btn btn-link">
                            @csrf
                            See more...
                        </a> 
                      </div>
                  </div>
                </div>
              </div>
        @endforeach



            </div>
            </div>
        </div>
            <!-- <div class="section section-about-us">
            <div class="container">
                <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">Who we are?</h2>
                    <h5 class="description">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record low maximum sea ice extent tihs year down to low ice extent in the Pacific and a late drop in ice extent in the Barents Sea.</h5>
                </div>
                </div>
                <div class="separator separator-primary"></div>
                <div class="section-story-overview">
                <div class="row">
                    <div class="col-md-6">
                    <div class="image-container image-left" style="background-image: url('img/login.jpg')">
                     -->
                        <!-- First image on the left side -->
                    
                        <!-- <p class="blockquote blockquote-primary">"Over the span of the satellite record, Arctic sea ice has been declining significantly, while sea ice in the Antarctichas increased very slightly"
                        <br>
                        <br>
                        <small>-NOAA</small>
                        </p>
                    </div> -->
                    
                    <!-- Second image on the left side of the article -->
                    
                    <!-- <div class="image-container" style="background-image: url('img/bg3.jpg')"></div>
                    </div>
                    <div class="col-md-5"> -->
                    
                    <!-- First image on the right side, above the article -->
                    
                    <!-- <div class="image-container image-right" style="background-image: url('img/bg1.jpg')"></div>
                    <h3>So what does the new record for the lowest level of winter ice actually mean</h3>
                    <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
                    </p>
                    <p>
                        For a start, it does not automatically follow that a record amount of ice will melt this summer. More important for determining the size of the annual thaw is the state of the weather as the midnight sun approaches and temperatures rise. But over the more than 30 years of satellite records, scientists have observed a clear pattern of decline, decade-by-decade.
                    </p>
                    <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
                    </p>
                    </div>
                </div>
                </div>
            </div>
            </div> -->

            
            <div class="section section-team text-center">
            <div class="container">
                <h2 class="title">Here is our team</h2>
                <div class="team">
                <div class="row">
                    <div class="col-md-4">
                    <div class="team-player">
                        <img src="" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                        <h4 class="title">Risa Intan</h4>
                        <p class="category text-primary">Project Manager</p>
                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-instagram"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-facebook-square"></i></a>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="team-player">
                        <img src="" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                        <h4 class="title">Ghalyatama Ikram Fauzi</h4>
                        <p class="category text-primary">Designer and Frontend</p>
                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-linkedin"></i></a>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="team-player">
                        <img src="" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                        <h4 class="title">Ja'far Shadiq Alatas</h4>
                        <p class="category text-primary">Backend and Business Analyst</p>
                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-google-plus"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-youtube"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            
        </div>


                                                <!-- Template 1 -->

        <!--   Core JS Files   -->
        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
        <!--  Plugin for the Wizard -->
        <script src="js/gsdk-bootstrap-wizard.js"></script>
        <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
        <script src="js/jquery.validate.min.js"></script>

                                                <!-- Template 2 -->
        <!--   Core JS Files   -->
        <script src="js/core/jquery.min.js" type="text/javascript"></script>
        <script src="js/core/popper.min.js" type="text/javascript"></script>
        <script src="js/core/bootstrap.min.js" type="text/javascript"></script>
        <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="js/plugins/bootstrap-switch.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
        <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
        <script src="js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
        <script src="js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>

        <!-- Bootstrap core JavaScript -->
        <!-- <script src="js/shop/jquery.min.js"></script> -->
        <!-- <script src="js/shop/bootstrap.bundle.min.js"></script> -->

        <script>
            $(document).ready(function() {
            // the body of this function is in assets/js/now-ui-kit.js
            nowuiKit.initSliders();
            });

            function scrollToDownload() {

            if ($('.section-download').length != 0) {
                $("html, body").animate({
                scrollTop: $('.section-download').offset().top
                }, 1000);
            }
            }
      </script>
    

    </body>
</html>
