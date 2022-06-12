@extends('layouts.frontbase')


@section('title', $setting->title)
@section('keywords', $setting->keywords)
@section('description', $setting->description)
@section('icon', Storage::url($setting->icon))


@section('content')
    @include('home.slider')
    @include('home.about')
    @include('home.qt')
    @include('home.menu')
    @include('home.customer_reviews')
    @include('home.gallery')
    @include('home.contact')

@endsection



{{--@section('sidebar')--}}
{{--    @parent--}}

{{--    <p>This is appended to the master sidebar.</p>--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    <p>This is my body content.</p>--}}
{{--@endsection--}}
