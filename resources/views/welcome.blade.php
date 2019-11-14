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
                <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
                IDENATION
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                    <i class="fab fa-twitter"></i>
                    <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                    <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                    <i class="fab fa-instagram"></i>
                    <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>
                <li class="nav-item">
            @if (Route::has('login'))

                    @auth
                        <a class="nav-link" rel="tooltip" data-placement="bottom" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="nav-link" rel="tooltip" data-placement="bottom" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                        @if (Route::has('register'))
                        <a class="nav-link" rel="tooltip" data-placement="bottom" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
              
            @endif
                </li>

                </ul>
            </div>
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
                            <h1 class="h1-seo">Now UI Kit.</h1>
                                <h3>A beautiful Bootstrap 4 UI kit. Yours free.</h3>
                    </div>
                </div>
            </div>

            <div class="section section-about-us">
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
                        <!-- First image on the left side -->
                        <p class="blockquote blockquote-primary">"Over the span of the satellite record, Arctic sea ice has been declining significantly, while sea ice in the Antarctichas increased very slightly"
                        <br>
                        <br>
                        <small>-NOAA</small>
                        </p>
                    </div>
                    <!-- Second image on the left side of the article -->
                    <div class="image-container" style="background-image: url('img/bg3.jpg')"></div>
                    </div>
                    <div class="col-md-5">
                    <!-- First image on the right side, above the article -->
                    <div class="image-container image-right" style="background-image: url('img/bg1.jpg')"></div>
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
            </div>
            <div class="section section-team text-center">
            <div class="container">
                <h2 class="title">Here is our team</h2>
                <div class="team">
                <div class="row">
                    <div class="col-md-4">
                    <div class="team-player">
                        <img src="img/avatar.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                        <h4 class="title">Romina Hadid</h4>
                        <p class="category text-primary">Model</p>
                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-instagram"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-facebook-square"></i></a>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="team-player">
                        <img src="img/ryan.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                        <h4 class="title">Ryan Tompson</h4>
                        <p class="category text-primary">Designer</p>
                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                        <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                        <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-linkedin"></i></a>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="team-player">
                        <img src="img/eva.jpg" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                        <h4 class="title">Eva Jenner</h4>
                        <p class="category text-primary">Fashion</p>
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
            <div class="section section-contact-us text-center">
            <div class="container">
                <h2 class="title">Want to work with us?</h2>
                <p class="description">Your project is very important to us.</p>
                <div class="row">
                <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
                    <div class="input-group input-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="First Name...">
                    </div>
                    <div class="input-group input-lg">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="now-ui-icons ui-1_email-85"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Email...">
                    </div>
                    <div class="textarea-container">
                    <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Type a message..."></textarea>
                    </div>
                    <div class="send-button">
                    <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Send Message</a>
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
