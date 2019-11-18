@extends('layouts.app')

@section('content')

<div class="section section-signup" style="background-image: url('img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
<div class="container">
    <div class="row justify-content-center">
         <div class="card card-signup" data-background-color="orange">
            
                
                <div class="card-header text-center">
                  <h3 class="card-title title-up"><b>Sign Up</b></h3>
                  <div class="social-line">
                    <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                      <i class="fab fa-google-plus"></i>
                    </a>
                  </div>
                </div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group no-border">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="now-ui-icons ui-2_favourite-28"></i>
                                </span>
                            </div>

                            <select name="status" class="form-control">
                               <option value="" selected>Choose...</option>
                                     <option value="1" style="color: black;" >Developer</option>
                                     <option value="2"style="color: black;" >Investor</option>
                            </select>
                        </div>

                        <div class="input-group no-border">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> -->
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="now-ui-icons users_circle-08"></i>
                                </span>
                            </div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name..." autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                        </div>

                        <div class="input-group no-border">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                            </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email...">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="input-group no-border">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons objects_key-25"></i>
                                    </span>
                                </div>
                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password...">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="input-group no-border">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> -->
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="now-ui-icons objects_key-25"></i>
                                </span>
                            </div>

                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password...">
                        </div>

                        
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-neutral btn-round btn-lg">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        
                    </form>
                </div>
            
        </div>
    </div>
</div>
</div>

@endsection
