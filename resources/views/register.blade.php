

<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Cloud Contact - Register</title>
  <!-- Favicon -->
  <link href="{!! asset('img/brand/favicon.png') !!}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{!! asset('vendor/nucleo/css/nucleo.css') !!}" rel="stylesheet">
  <link href="{!! asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') !!}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{!! asset('css/tooltip-viewport.css') !!}">
  <!-- Argon CSS -->
  <link type="text/css" href="{!! asset('css/argon.css?v=1.0.0') !!}" rel="stylesheet">
  <style>
  .has-error{
	  border:2px solid red;
  }
  </style>

<body class="bg-default">
  <div class="main-content">
  
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="" title="About" data-toggle="popover" data-content="CloudContact is a cloud based address book application with inbuilt intrusion detection system that protects the user's data from malicious attack by defined rules" data-placement="bottom">
    <h2 style="color: #fff; text-transform:none;"><i class="fa fa-1x fa-address-book"></i>   CloudContact</h2>
          <!--<img src="{!! asset('img/brand/white.png') !!}" class="">-->
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar-collapse-main" style="">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="" title="about" data-toggle="popover" data-content="CloudContact is a cloud based address book application with inbuilt intrusion detection system that protects the user's data from malicious attack by defined rules" data-placement="bottom">
                 <h2 style="color: #172b4d; text-transform:none;"><i class="fa fa-1x fa-address-book"></i>   CloudContact</h2>
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            
            
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="/login">
                <i class="ni ni-lock-circle-open"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
            
          </ul>
        </div>
        
        
      </div>
    </nav>
    <!-- Header -->
    
    <!-- Page content -->
    <div class="container " style="
">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8" style="
    margin-top: 150px;
">

		@if(session()->has('success'))
        	<div class="alert alert-success">
            	{{ session()->get('success') }}
             </div>
         @endif
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"><small>Sign up with</small></div>
              <div class="text-center">
                <a href="#" class="btn btn-neutral btn-icon mr-4">
                  <span class="btn-inner--icon"><img src="{!! asset('img/icons/common/github.svg')!!}"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="{!! asset('img/icons/common/google.svg') !!}"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Or sign up with credentials</small>
              </div>
              <form role="form" method="post" action="">
              {{ csrf_field() }}
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3 {{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Name" type="text" name="name">
                   
                  </div>
                   @if ($errors->has('name'))
                                    <small class="help-block">
                                        *{{ $errors->first('name') }}
                                    </small>
                     @endif
                </div>
                <div class="form-group ">
                  <div class="input-group input-group-alternative mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email">
                    
                  </div>
                  @if ($errors->has('name'))
                            <small class="help-block">
                                *{{ $errors->first('email') }}
                            </small>
                     @endif
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative {{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password">
                    
                  </div>
                  @if ($errors->has('password'))
                                    <small class="help-block">
                                        *{{ $errors->first('password') }}
                                    </small>
                     @endif
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation">
                  </div>
                </div>
                <!--<div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div>-->
                 <div class="form-group">
                  <div class="input-group input-group-alternative {{ $errors->has('secure_pin') ? ' has-error' : '' }}">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input class="form-control" placeholder="Encryption PIN" type="password" name="secure_pin">
                    
                  </div>
                  @if ($errors->has('secure_pin'))
                                    <small class="help-block">
                                        *{{ $errors->first('secure_pin') }}
                                    </small>
                     @endif
                </div>
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">I agree with the <a  class="tooltip-viewport-bottom text-success"  data-original-title="Privacy Policy: Note that we protect your data with the use of industry accepted security techniques and algorithms that shields and protects your personal data from intrusion, but if requested by a national security agency when it affects the security of the nation we would be glad to grant them access, also its not bad to make money from your data like Facebook and Google">Privacy Policy</a></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">Create account</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            © 2018 <a href="github.com/olaysco" class="font-weight-bold ml-1" target="_blank">Olaysco</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="github.com/olaysco" class="nav-link" target="_blank">olaysco</a>
            </li>
            <li class="nav-item">
              <a href="github.com/olaysco" class="nav-link" target="_blank">About Us</a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{!! asset('vendor/jquery/dist/jquery.min.js') !!}"></script>
  <script src="{!! asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
  <!-- Argon JS -->
  <script src="{!! asset('js/argon.js?v=1.0.0') !!}"></script>

<script src="{!! asset('js/tooltipviewport.js') !!}"></script>
<script>
$(document).ready(function(e) {
	$('[data-toggle="popover"]').click(function(e) {
        e.preventDefault();
    });
    $('[data-toggle="popover"]').popover();
});
</script>
</body></html>