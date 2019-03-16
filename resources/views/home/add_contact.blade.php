@if (!(Auth::check()))
	redirect('login')
@endif
<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Cloud Contact</title>
  <!-- Favicon -->
  <link href="{!! asset('img/brand/favicon.png') !!}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{!! asset('vendor/nucleo/css/nucleo.css') !!}" rel="stylesheet">
  <link href="{!! asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') !!}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{!! asset('css/argon.css?v=1.0.0') !!}" rel="stylesheet">
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}

.bg-gradient-primary {
    background: linear-gradient(87deg, #172b4d 0, #5f2669 100%) !important;
}
</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
<style>
  .has-error{
	  border:2px solid red;
  }
  </style>

</head>

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="/home">
        <h2 style="color: #172b4d; text-transform:none;"><i class="fa fa-1x fa-address-book"></i>   CloudContact</h2>
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{!! asset('img/theme/bg.jpg') !!}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="." class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="/logout" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="navbar-collapse collapse" id="sidenav-collapse-main" style="">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-8 collapse-brand">
              <a href="./index.html">
               <h2 style="color: #532764;text-transform:none;"><i class="fa fa-1x fa-address-book"></i>   CloudContact</h2>
              </a>
            </div>
             @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
@if(session()->has('success'))
        	<div class="alert alert-success">
            	{{ session()->get('success') }}
             </div>
         @endif
            <div class="col-4 collapse-close">
              <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
        {{ csrf_field() }}
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="/home">
              <i class="ni ni-books text-primary"></i>All contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <i class="fa fa-plus text-blue"></i>Add Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-box-2 text-orange"></i>Usage Stat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-single-02 text-yellow"></i> User profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-cloud-download-95 text-red"></i>Export Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ni ni-settings text-info"></i>Preferences</a>
          </li>
          
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Cloud Contact</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="fa fa-book-open"></i>Learn More</a>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{!! asset('img/theme/bg.jpg') !!}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              
              <div class="dropdown-divider"></div>
              <a href="/logout" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="text-white mb-0">Add new contact</h3>
                </div>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Enter details of new contact</small>
              </div>
              <form role="form" method="post">
              {{ csrf_field() }}
              <div class="form-group mb-3">
                  <div class="input-group input-group-alternative {{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input name="name" class="form-control" type="text" placeholder="Contact full name" value="">
                  </div>
                  @if ($errors->has('name'))
                                    <small class="help-block">
                                        *{{ $errors->first('name') }}
                                    </small>
                     @endif
                </div>
                
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input name="email" class="form-control" type="email" placeholder="Email" value="">
                  </div>
                  @if ($errors->has('email'))
                                    <small class="help-block">
                                        *{{ $errors->first('email') }}
                                    </small>
                     @endif
                </div>
             
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative {{ $errors->has('mobile_phone') ? ' has-error' : '' }}">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    <input name="mobile_phone" class="form-control" type="tel" placeholder="Mobile Phone" value="">
                  </div>
                  @if ($errors->has('mobile_phone'))
                                    <small class="help-block">
                                        *{{ $errors->first('mobile_phone') }}
                                    </small>
                     @endif
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative {{ $errors->has('work_phone') ? ' has-error' : '' }}">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    <input name="work_phone" class="form-control" type="tel" placeholder="Work Phone">
                  </div>
                  @if ($errors->has('work_phone'))
                                    <small class="help-block">
                                        *{{ $errors->first('work_phone') }}
                                    </small>
                     @endif
                </div>
                
                <div class="text-center">
                  <button class="btn btn-primary my-4" type="submit">Add to contact</button>
                </div>
              </form>
            </div>
              
            </div>
            
          </div>
        </div>
        
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              © 2018 <a href="hgithub.com" class="font-weight-bold ml-1" target="_blank">Olaysco</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              
              <li class="nav-item">
                <a href="https://github.com/olaysco" class="nav-link" target="_blank">About Me</a>
              </li>
              
              
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{!! asset('vendor/jquery/dist/jquery.min.js') !!}"></script>
  <script src="{!! asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') !!}"></script>
  <!-- Optional JS -->
  <script src="{!! asset('vendor/chart.js/dist/Chart.min.js') !!}"></script>
  <script src="{!! asset('vendor/chart.js/dist/Chart.extension.js') !!}"></script>
  <!-- Argon JS -->
  <script src="{!! asset('js/argon.js?v=1.0.0') !!}"></script>


<div id="chart-tooltip" class="popover bs-popover-top" role="tooltip" style="top: 582.146px; left: 610.12px; display: none; z-index: 100;"><div class="arrow"></div><h3 class="popover-header text-center">Sep</h3><div class="popover-body d-flex align-items-center justify-content-center"><span class="badge badge-dot"><i class="bg-primary"></i></span><span class="popover-body-value">$15k</span></div></div></body></html>