











































@extends('layouts.frontbase')

@section('title', 'About Us' , $setting->title)
@section('keywords', $setting->keywords)
@section('description', $setting->description)
@section('icon', Storage::url($setting->icon))

@section('content')
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->


    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{asset('assets')}}/images/about-img.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>Welcome To <span>Laravel Restaurant</span></h1>
                        <h4>Little Story</h4>
                        <p>{{$setting->aboutus}}</p>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
@endsection
