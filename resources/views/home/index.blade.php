@extends('layouts.frontbase')

@section('title', 'Title from sub file')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection



{{--<!DOCTYPE html>--}}
{{--<html>--}}

{{--<head>--}}
{{--    <title>Laravel9-Cafe-Restaurant</title>--}}
{{--</head>--}}

{{--<body>--}}

{{--<h1>Welcome to Our Cafe & Restaurant</h1>--}}
{{--<h2>Web Site Main Ingredients:</h2>--}}

{{--<p>Pages (HTML)</p>--}}
{{--<p>Style Sheets (CSS)</p>--}}
{{--<p>Computer Code (JavaScript)</p>--}}
{{--<p>Live Data (Files and Databases)</p>--}}

{{--</body>--}}
{{--</html>--}}
