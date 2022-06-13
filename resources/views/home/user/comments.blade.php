
@extends('layouts.frontbase')

@section('title', 'User Comments & Reviews' )


@section('content')
    <div class="page-title lb single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-envelope-open-o bg-orange"></i> USER <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">User Comments</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-lg-5">
                                <strong>User Menu</strong>
                                @include('home.user.usermenu')
                            </div>
                            <div class="col-lg-7">
                                <strong>User Comments & Reviews</strong>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Product</th>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Reviews</th>
                                        <th>Rate</th>
                                        <th>Status</th>
                                        <th>Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $rs)
                                        <tr>
                                            <td>{{$rs -> id}}</td>
                                            <td><a href="{{route('product',['id'=>$rs ->product_id] )}}">{{$rs ->category->title}}</a>
                                            <td>{{$rs ->user->name}}</td>
                                            <td>{{$rs -> subject}}</td>
                                            <td>{{$rs -> review}}</td>
                                            <td>{{$rs -> rate}}</td>
                                            <td>{{$rs -> status}}</td>

                                            <td><a onclick="return confirm('Are you sure?')" href="{{route('userpanel.reviewdestroy',['id'=>$rs -> id])}}"class="btn btn-danger">Delete</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
