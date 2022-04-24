<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>@yield("title")</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('assets')}}/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/custom.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield("head")
</head>


<body>

@include('home.header')

@section('slider')
    @include('home.slider')
@show

{{--@section('sidebar')--}}
{{--    @include('home.sidebar')--}}
{{--@show--}}

@section('about')
    @include('home.about')
@show

@section('qt')
    @include('home.qt')
@show

@section('menu')
    @include('home.menu')
@show

@yield('content')

@section('gallery')
    @include('home.gallery')
@show

@section('customer_reviews')
    @include('home.customer_reviews')
@show


@section('contact')
    @include('home.contact')
@show


<@include('home.footer')
@yield('foot')
</body>
</html>
