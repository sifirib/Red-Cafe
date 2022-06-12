@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')

    <div style="height: 15vh"></div>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!DOCTYPE html>
    <html lang="en">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>eCommerce Product Detail</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    </head>

    <body>

    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">

                            @php $len_of_images = 1; @endphp

                            <div class="tab-pane active" id="pic-{{$len_of_images}}"><img src="{{Storage::url($data->image)}}" style="height: 252px; width: 400px"/></div>

                            @foreach ($images as $rs)
                                @php $len_of_images += 1; @endphp
                                <div class="tab-pane" id="pic-{{$len_of_images}}">
                                    <img src="{{Storage::url($rs->image)}}" style="height: 252px; width: 400px" />
                                    <br> {{$rs->title}}
                                </div>

                            @endforeach
                        </div>

                        <ul class="preview-thumbnail nav nav-tabs">
                            @php $len_of_images = 1; @endphp

                            <li class="active"><a data-target="#pic-{{$len_of_images}}" data-toggle="tab"><img src="{{Storage::url($data->image)}}" style="height: 120px; width: 160px" /></a></li>

                            @foreach ($images as $rs)
                                @php $len_of_images += 1; @endphp
                                <li>
                                    <a data-target="#pic-{{$len_of_images}}" data-toggle="tab">
                                        <img src="{{Storage::url($rs->image)}}" style="height: 120px; width: 160px" />
                                    </a>
                                </li>
                            @endforeach

                        </ul>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{$data->title}}</h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">{{3 * $data->price}} reviews</span>
                        </div>
                        <p class="product-description">{!! $data->detail !!}</p>
                        <h2 class="price"><strong>Price: <span>{{$data->price}}₺</span> </strong></h2>
                        <p class="vote"><strong>{{(2.5 * $data->price) % 100}}%</strong> of buyers enjoyed this product! <strong>({{2 * $data->price}} votes)</strong></p>

                        <div class="action">
                            <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>

    <div style="height: 15vh"></div>


    @include('home.contact')
@endsection

@section('foot')

@endsection
