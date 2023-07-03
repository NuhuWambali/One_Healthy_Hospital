<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('userAssets/css/maicons.css')}}">
        <link rel="stylesheet" href="{{asset('userAssets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('userAssets/vendor/owl-carousel/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('userAssets/vendor/animate/animate.css')}}">
        <link rel="stylesheet" href="{{asset('userAssets/css/theme.css')}}">
        <link rel="stylesheet" href="{{asset('userAssets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('userAssets/css/customStyling.css')}}">
        <title>One Health | @yield('title')</title>
</head>
<style>
    body{
        background-image: url({{asset('userAssets/img/bg_image_1.jpg')}});
        background-size:cover;
        background-repeat:no-repeat;
    }
</style>
<body>
    <div class="container" >
        <div class="formStyle">
            @yield('content')
        </div>
    </div>

<script src="{{asset('userAssets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('userAssets/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('userAssets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('userAssets/vendor/wow/wow.min.js')}}"></script>

<script src="{{asset('userAssets/js/theme.js')}}"></script>

<script src="{{asset('userAssets/js/bootstrap.js')}}"></script>
</body>
</html>

