<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IDENATION</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Plugin -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="css/brr.css">

</head>
<body class="hold-transition sidebar-mini">

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
                                    <a  class="dropdown-header" href="{{ url('/dashboard') }}">
                                         {{ __('Dashboard') }} 
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

  <!-- Content Wrapper. Contains page content -->
  

    <!-- Main content -->
    <div class="container brr">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
          <form method="post" action="{{ route('update.ide', $tampils->id) }}" enctype="multipart/form-data">
                    @csrf
              <div class="form-group">
                <div class="card-header">
                  <h3>Create your ide! </h3>
                  <small class="form-text text-muted">Put your title here!</small>
                  <input type="subject" name ="nama" class="form-control" placeholder="Title" value="{{ $tampils->nama }}">
                  <small class="form-text text-muted">Category : web/mobile/iot</small>  
                  <input type="subject" name = "category" class="form-control form-control-sm" placeholder="Category" value="Web">
                  
                </div>
                  
                <div class="card-body pad">
                <small class="form-text text-muted">Description: </small>
                  <div class="mb-3">
                    <textarea name="Deskripsi" class="textarea" 
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo "$tampils->Deskripsi";?></textarea>
                  </div>
                
                  <small class="form-text text-muted">it's your product foto (700x400)px </small>
                  <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                 
                </div>
                <div class="card-footer">
                  <button type="submit" value="Save" class="btn btn-warning btn-block">Submit</button>
                </div>
              </div>
            </form>
        </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
</div>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->

<!-- Plugin-->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>
