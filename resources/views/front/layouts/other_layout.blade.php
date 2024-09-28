<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Joba - Responsive Job Board HTML Template</title>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="Maidathemes"/>

    <link rel="shortcut icon" href="{{ asset('images/front_img/favicon.png') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ url('css/front_css/bootstrap.min.css') }}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/front_css/materialdesignicons.min.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ url('css/front_css/fontawesome.css') }}"/>

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/front_css/selectize.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('css/front_css/nice-select.css') }}" />


    <!--Slider-->
    <link rel="stylesheet" href="{{ url('css/front_css/owl.carousel.css') }}"/>
    <link rel="stylesheet" href="{{ url('css/front_css/owl.theme.css') }}"/>
    <link rel="stylesheet" href="{{ url('css/front_css/owl.transitions.css') }}"/>



    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/front_css/style.css') }}"/>
</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

@include('front.layouts.header')


@yield('content')

@include('front.layouts.footer')


<!-- Back to top -->
<a href="#" class="back-to-top rounded text-center" id="back-to-top">
    <i class="mdi mdi-chevron-up d-block"> </i>
</a>
<!-- Back to top -->

<!-- javascript -->
<script src="{{ url('js/front_js/jquery.min.js') }}"></script>
<script src="{{ url('js/front_js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('js/front_js/jquery.easing.min.js') }}"></script>
<script src="{{ url('js/front_js/plugins.js') }}"></script>

<!-- selectize js -->
<script src="{{ url('js/front_js/selectize.min.js') }}"></script>
<script src="{{ url('js/front_js/jquery.nice-select.min.js') }}"></script>


<script src="{{ url('js/front_js/owl.carousel.min.js') }}"></script>
<script src="{{ url('js/front_js/counter.int.js') }}"></script>

<script src="{{ url('js/front_js/app.js') }}"></script>
<script src="{{ url('js/front_js/home.js') }}"></script>

</body>
</html>
