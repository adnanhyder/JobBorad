<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <link href="{{ asset('images/admin_img/logo/logo.png') }}" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{ url('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ url('css/admin_css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">

    @include('admin.layouts.sidebar')


    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        @include('admin.layouts.topbar')

        @yield('content')


      </div>
     @include('admin.layouts.footer')
    </div>



  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ url('js/admin_js/ruang-admin.min.js') }}"></script>
  <script src="{{ url('vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ url('js/admin_js/demo/chart-area-demo.js') }}"></script>
</body>

</html>
