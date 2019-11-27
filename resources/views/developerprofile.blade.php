<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Developer Profile
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <link rel="stylesheet" href="css/brr.css">

  <!-- <link href="css/mystyle.css" rel="stylesheet" /> -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Idenation') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                                    <a  class="dropdown-header" href="{{ route('profile') }}">
                                         {{ __('Profile') }} 
                                    </a>
                                </div>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        
        

      <div class="container brr">
       <div class="row justify-content-center">
          <nav class="nav navbar-dark" aria-label="breadcrumb" id="data-target">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="navl-link" href="#prof">Profile</a></li>
              <li class="breadcrumb-item"><a class="navl-link" href="#ide">Idea Work</a></li>
            </ol>
          </nav>
        </div>
        <div class="row justify-content-center">
   
            <div class="col-md-8">
              <div class="card text-center">
                <div class="card-header" id="prof">
                  <h5> Tamsky's Profile</h5>
                  <small>let's try to get closer to the developer!</smalll>
                  <hr>
                </div>
                <div class="card-body">
                  <div class="author">
                    <a href="#">
                    <img src="img/user.png" style="max-height:200px;max-width:200px;margin-top:10px;">
                      <h5 class="title"></h5>
                    </a>
                  </div>
                </div>
                  <hr>
                <div class="card-body">
                                            <div class="form-group">
                                                <label>Nama         :</label>
                                                <h5 class="text-warning"> Otto Iskandar </h5>
                                            </div>
                                            <div class="form-group">
                                                <label>Skill       :</label>
                                                <h5 class="text-warning"> HTML, CSS, PHP, Javascript</h5>
                                            </div>
                                            <div class="form-group">
                                                <label>Email        :</label>
                                                <h5 class="text-warning"> otto.ottong@gmail.com </h5>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat       :</label>
                                                <h5 class="text-warning"> diatas langit bawah bumi </h5>
                                            </div>
                                            <div class="form-group">
                                                <label>Kontak       :</label>
                                                <h5 class="text-warning"> 0822 -2222 -2222 </h5>
                                            </div>
                                            <div class="form-group">
                                                <div class="float-right">
                                                  <a class="btn btn-warning" href="#"> Send Mail </a>
                                                </div>
                                            </div>
                </div>
                <br><br>
                <hr>
                <div class="card-body">
                        <div class="card-title h5" id="ide"> 
                            <strong>Idea Work</strong> 
                        </div>
                  <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="card card-stats" >
                        <div class="card-body ">
                          <div class="row">
                            <div class="col-5 col-md-4">
                              <div class="icon-big text-center icon-warning">
                                <img src="img/image.png" class="rounded">
                              </div>
                            </div>
                            <div class="col-7 col-md-8">
                              <div class="numbers">
                                <p class="card-category">Web</p>
                                <p class="card-title">IDE 1</p>
                              </div>
                              
                            </div>
                            <div class="col-7 col-md-12">
                              <p class="card-text text-truncate" style="max-width: 150px;">sjhaskjahskjhasjkdhkjasjhvahsxhjasvxhaskxakjshxjabsxbbashsaj </p>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer ">
                          <hr>
                              <a href="#">
                                  Check This
                              </a> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>                                             
               
              </div>
            </div>
          
        </div>
      </div>
      
    
  </div>


  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
