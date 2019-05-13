<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title> @yield('titulo') </title>

  <!-- GOOGLE FONTS -->
  <link href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500') }}" rel="stylesheet"/>
  <link href="{{ asset('https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css') }}" rel="stylesheet" />

  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="{{ asset('theme/plugins/font-awesome/css/font-awesome.min.css') }}"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('tema/assets/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('tema/assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  <link href="{{ asset('tema/assets/plugins/flag-icons/css/flag-icon.min.css') }}" rel="stylesheet"/>
  <link href="{{ asset('tema/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
  <link href="{{ asset('tema/assets/plugins/ladda/ladda.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('tema/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('tema/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{ asset('tema/assets/css/sleek.css') }}" />


  <!-- FAVICON -->
  <link href="{{ asset('tema/assets/img/favicon.png') }}" rel="shortcut icon" />

  <!--
  HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
-->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="{{ asset('tema/assets/plugins/nprogress/nprogress.js') }}"></script>


<!-- SCRIPTS -->
<script src="{{ asset('tema/assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('tema/https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM') }}" defer></script>
<script src="{{ asset('tema/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/toaster/toastr.min.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/slimscrollbar/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/charts/Chart.min.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/ladda/spin.min.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/ladda/ladda.min.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/jquery-mask-input/jquery.mask.min.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('tema/assets/plugins/jekyll-search.min.js') }}"></script>
<script src="{{ asset('tema/assets/js/sleek.js') }}"></script>
<script src="{{ asset('tema/assets/js/chart.js') }}"></script>
<script src="{{ asset('tema/assets/js/date-range.js') }}"></script>
<script src="{{ asset('tema/assets/js/map.js') }}"></script>
<script src="{{ asset('tema/assets/js/custom.js') }}"></script>

<!-- Plugins -->

<!-- Sweet Alert 2 -->
<script src="{{ asset('js/sweetalert2.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">

<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}"/>
<script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>

<!-- jQuery Mask-->
<script src="{{ asset('js/jquery.mask.js') }}"></script>

<!-- jQuery Mask Money-->
<script src="{{ asset('js/jquery.maskMoney.js') }}"></script>

</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
  <script>
  NProgress.configure({ showSpinner: false });
  NProgress.start();
  </script>

  <div class="mobile-sticky-body-overlay"></div>

  <div class="wrapper">

    <!--
    ====================================
    ——— LEFT SIDEBAR WITH FOOTER
    =====================================
  -->
  <aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
      <!-- Aplication Brand -->
      <div class="app-brand">
        <a href="/index.html">
          <svg
          class="brand-icon"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid"
          width="30"
          height="33"
          viewBox="0 0 30 33"
          >
          <g fill="none" fill-rule="evenodd">
            <path
            class="logo-fill-blue"
            fill="#7DBCFF"
            d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
            />
            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
          </g>
        </svg>
        <span class="brand-name"> Donna Ziza </span>
      </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">


        <li  class="has-sub" >
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
          aria-expanded="false" aria-controls="ui-elements">
          <i class="mdi mdi-folder-multiple-outline"></i>
          <span class="nav-text"> Bebidas </span> <b class="caret"></b>
        </a>
        <ul  class="collapse"  id="ui-elements"
        data-parent="#sidebar-menu">
        <div class="sub-menu">

          <li >
            <a href="alert.html"> Bebidas Quentes </a>
          </li>

          <li >
            <a href="badge.html">Bebidas Geladas</a>
          </li>

          <li >
            <a href="breadcrumb.html">Vitamina</a>
          </li>

          <li >
            <a href="list-group.html">Bebida Alcolica</a>
          </li>


        </li>

      </div>
    </ul>
  </li>


  <li  class="has-sub active expand" >
    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
    aria-expanded="false" aria-controls="dashboard">
    <i class="mdi mdi-view-dashboard-outline"></i>
    <span class="nav-text"> Vitamina </span> <b class="caret"></b>
  </a>
</li>


  <li  class="has-sub active expand" >
    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
    aria-expanded="false" aria-controls="dashboard">
    <i class="mdi mdi-view-dashboard-outline"></i>
    <span class="nav-text"> Lanches </span> <b class="caret"></b>
  </a>
</li>


<li  class="has-sub active expand" >
  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
    aria-expanded="false" aria-controls="dashboard">
    <i class="mdi mdi-view-dashboard-outline"></i>
    <span class="nav-text"> Crepioca </span> <b class="caret"></b>
  </a>
</li>

<li  class="has-sub active expand" >
  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
  aria-expanded="false" aria-controls="dashboard">
  <i class="mdi mdi-view-dashboard-outline"></i>
  <span class="nav-text"> Omelete </span> <b class="caret"></b>
</a>
</li>


<li  class="has-sub active expand" >
  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
  aria-expanded="false" aria-controls="dashboard">
  <i class="mdi mdi-view-dashboard-outline"></i>
  <span class="nav-text"> Pastel </span> <b class="caret"></b>
</a>
</li>


<li  class="has-sub active expand" >
  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
  aria-expanded="false" aria-controls="dashboard">
  <i class="mdi mdi-view-dashboard-outline"></i>
  <span class="nav-text"> Pizza </span> <b class="caret"></b>
</a>
</li>







</div>

<hr class="separator" />

</div>
</aside>



<div class="page-wrapper">
  <!-- Header -->
  <header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
      <!-- Sidebar toggle button -->
      <button id="sidebar-toggler" class="sidebar-toggle">
        <span class="sr-only">Toggle navigation</span>
      </button>


      <div class="navbar-right">
        <ul class="nav navbar-nav">
          <!-- User Account -->
          <li class="dropdown user-menu">
            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
              <span class="d-none d-lg-inline-block">Abdus Salam</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
              <!-- User image -->
              <li class="dropdown-header">
                <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                <div class="d-inline-block">
                  Abdus Salam <small class="pt-1">abdus@gmail.com</small>
                </div>
              </li>
              <li class="dropdown-footer">
                <a href="signin.html"> <i class="mdi mdi-logout"></i> Log Out </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>


  </header>


  <div class="content-wrapper">
    <div class="content">

      @include('alerts.success_toast')
      @include('alerts.success')
      @include('alerts.error')

      @yield('conteudo')


    </div>




  </div>

  <footer class="footer mt-auto">
    <div class="copyright bg-white">
      <p>
        &copy; <span id="copy-year">2019</span> Renatinha Maravilha
      </p>
    </div>
    <script>
    var d = new Date();
    var year = d.getFullYear();
    document.getElementById("copy-year").innerHTML = year;
    </script>
  </footer>

</div>
</div>



</body>
</html>
