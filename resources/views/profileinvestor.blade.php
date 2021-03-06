<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    	<link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Idenation</title>

        <!-- Styles -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="css/demo.css" rel="stylesheet" />
        <link href="css/mystyle.css" rel="stylesheet" />

    </head>

    <body>

            <div class="container">
                <example-component> </example-component>
            </div>

            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm fixed-top">
        
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/') }}">Home</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
        
            </nav>

                <!--   Big container   -->
                <div class="container">
                <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--      Wizard container        -->
                    <div class="wizard-container">

                        <div class="card wizard-card" data-color="orange" id="wizardProfile">
                            <form action="" method="">
                        <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                                <div class="wizard-header">
                                    <h3>
                                    YOUR PROFILE <br>
                                    <small>This information will let us know more about you.</small>
                                    </h3>
                                </div>

                                <div class="wizard-navigation">
                                    <ul>
                                        <li><a href="#about" data-toggle="tab">About</a></li>
                                    </ul>

                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                        <div class="col-sm-4 col-sm-offset-1">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="{{ asset('img/profile/'.$users->image)  }}" class="picture-src" id="wizardPicturePreview" title=""/>
                                                   
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Perusahaan:</label>
                                                <p class="text-primary"> {{$users->company_name}} </p>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama         :</label>
                                                <p class="text-primary"> {{$users->name}} </p>
                                            </div>
                                            <div class="form-group">
                                                <label>Posisi       :<small>(developer/investor)</small></label>
                                                <p class="text-primary"> {{$users->posisi}} </p>
                                            </div>
                                            <div class="form-group">
                                                <label>Email        :</label>
                                                <p class="text-primary"> {{$users->email}} </p>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat       :</label>
                                                <p class="text-primary"> {{$users->alamat}} </p>
                                            </div>
                                            <div class="form-group">
                                                <label>Kontak       :</label>
                                                <p class="text-primary"> {{$users->kontak}} </p>
                                            </div>
                                        </div>
                                        <!-- <div class="col-sm-10 col-sm-offset-1"> -->
                                            
                                        <!-- </div> -->
                                    </div>
                                    </div>
                                </div>
                                <div class="wizard-footer height-wizard">
                                    <div class="pull-right">
                                        <a href="{{ route('show.investor') }}" method="post"> 
                                            @csrf
                                            <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='edit profile' value='Edit Profile' />
                                        </a>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
                </div><!-- end row -->
            </div> <!--  big container -->



       


    <!--   Core JS Files   -->
    <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="js/jquery.validate.min.js"></script>

    </body>
</html>
