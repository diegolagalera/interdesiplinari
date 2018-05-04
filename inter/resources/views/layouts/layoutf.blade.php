<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('public2/assets/img/kit/free/apple-icon.png')}}">
    <link rel="icon" href="{{asset('public2/assets/img/kit/free/favicon.png')}}">
    <title>
        BAXkids
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('public2/assets/css/material-kit.css?v=2.0.2')}}">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('public2/assets/assets-for-demo/demo.css')}}" rel="stylesheet" />
    <!-- iframe removal -->
</head>

<body class="index-page ">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/">BAXkids </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                  @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">
                          <i class="material-icons"></i> {{ __('Login') }}
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('create') }}">
                          <i class="material-icons"></i> {{ __('Register') }}
                      </a>
                  </li>
                  @else
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="fa fa-user"></i> {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="/{{ Auth::user()->id}}" class="dropdown-item">
                                <i class="material-icons"></i> Perfil
                            </a>
                            <a href="{{ route('logout') }}" class="dropdown-item">
                                <i class="material-icons"></i> Salir
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mapa" onclick="scrollToDownload()">
                            <i class="fa fa-thumb-tack"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    <!--FONDO -->
    <div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('public2/assets/img/kit/bg2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h1>Material Kit.</h1>
                        <h3>A Badass Bootstrap 4 UI Kit based on Material Design.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container">
              @yield('content')
            </div>
          </div>
        </div>
      </body>
    <!--  End Modal -->
    <footer class="footer ">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="http://presentation.creative-tim.com">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright pull-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="{{asset('public2/assets/js/core/jquery.min.js')}}"></script>
    <script src="{{asset('public2/assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('public2/assets/js/bootstrap-material-design.js')}}"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="{{asset('public2/assets/js/plugins/moment.min.js')}}"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker-->
    <script src="{{asset('public2/assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('public2/assets/js/plugins/nouislider.min.js')}}"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="{{asset('public2/assets/js/material-kit.js?v=2.0.2')}}"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="{{asset('public2/assets/assets-for-demo/js/material-kit-demo.js')}}"></script>
    <script>
        $(document).ready(function() {

            //init DateTimePickers
            materialKit.initFormExtendedDatetimepickers();

            // Sliders Init
            materialKit.initSliders();
        });
    </script>
</body>

</html>
