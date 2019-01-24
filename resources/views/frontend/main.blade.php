<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--font awesome-->
<link rel="stylesheet" href="{{asset('frontend/css/font-awesome/css/font-awesome.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

    <!--adding animation-->
<link rel="stylesheet"  href="{{asset('frontend/css/animate/animate.css')}}">

    <!--font used-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,400i,500,500i,700,700i" rel="stylesheet">

    <!--adding carousal css-->
<link rel="stylesheet" href="{{asset('frontend/css/owl-carousal/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/owl-carousal/owl.theme.default.min.css')}}">

    <!--adding the css file-->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">

    <title>BuyThings</title>
</head>
<body>

        @include('frontend.navbar')

        @yield('content')

        @include('frontend.footer')

    <!-- jQuery JS -->
<script src="{{asset('frontend/js/jquery.js')}}"></script>

<!--adding a animate js-->
<script src="{{asset('frontend/js/wow/wow.min.js')}}"></script>

<!--adding carousal effect-->
<script src="{{asset('frontend/js/owl-carousal/owl.carousel.min.js')}}"></script>

<!--adding the custom js file-->
<script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>

<!--Popper.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!--smooth scroll-->
<script src="{{asset('frontend/js/smooth-scroll/jquery.easing.1.3.js')}}"></script>


<!--bootstrap js-->
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
</body>
</html>
