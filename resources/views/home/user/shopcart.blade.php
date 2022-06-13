@extends('layouts.frontbase')

@section('title', 'User ShopCart' )



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
                        <li class="breadcrumb-item active">User Panel</li>
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
                        <div class="shopping-cart section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Shopping Summery -->
                                        <table class="table shopping-summery">
                                            <thead>
                                            <tr class="main-hading">
                                                <th>PRODUCT</th>
                                                <th>NAME</th>
                                                <th class="text-center">UNIT PRICE</th>
                                                <th class="text-center">QUANTITY</th>
                                                <th class="text-center">TOTAL</th>
                                                <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $total = 0; @endphp
                                            @foreach($data as $rs)
                                                <tr>
                                                    <td class="image" data-title="No"><img src="{{Storage::url($rs->product->image)}}" style="width: 180px; height: 140px" alt="#"></td>
                                                    <td class="product-des" data-title="Description">
                                                        <p class="product-name"><a href="#">{{$rs->product->title}}</a></p>
                                                        <p class="product-des">{{$rs->product->title}}</p>
                                                    </td>
                                                    <td class="price" data-title="Price"><span>{{$rs->product->price}} $</span></td>
                                                    <td class="qty" data-title="Qty"><!-- Input Order -->
                                                        <div class="input-group">

                                                            <input type="number" name="quantity" class="input-number" min="1" max="100" value="{{$rs->quantity}}">

                                                        </div>
                                                        <!--/ End Input Order -->
                                                    </td>
                                                    <td class="total-amount" data-title="Total"><span>{{$rs->product->price * $rs->quantity}}</span></td>
                                                    <td class="action" data-title="Remove"><a href="#"><i class="ti-trash remove-icon"></i></a></td>
                                                </tr>
                                                @php $total += $rs->product->price * $rs->quantity; @endphp
                                            @endforeach

                                            </tbody>
                                        </table>
                                        <!--/ End Shopping Summery -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Total Amount -->
                                        <div class="total-amount">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-5 col-12">
                                                    <div class="left">

                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-7 col-12">
                                                    <div class="right">
                                                        <ul>
                                                            <h1 style="color: orange"><li>Cart Subtotal: <span style="color: green"> $ {{$total}}</span></li></h1>
                                                            <li>Shipping<span>Free</span></li>
                                                            <li>You Save<span>$20.00</span></li>
                                                            <li class="last">You Pay<span>${{$total}}</span></li>
                                                        </ul>
                                                        <div class="button5">
                                                            <a href="#" class="btn">Checkout</a>
                                                            <a href="#" class="btn">Continue shopping</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ End Total Amount -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection
