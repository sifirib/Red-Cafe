@extends('layouts.adminbase')

@section('title', 'Product List')

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <a href="{{route('admin.product.create')}}" class="btn btn-default btn-success btn-lg">Add Product</a>

                        <!--   Product List -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Products
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Keywords</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th style="width: 40px"></th>
                                            <th style="width: 40px"></th>
                                            <th style="width: 40px"></th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $rs)
                                            <tr class="success">
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->title}}</td>
                                                <td>{{$rs->keywords}}</td>
                                                <td>{{$rs->description}}</td>
                                                <td>{{$rs->image}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td><a href="{{route('admin.product.edit', ['id'=>$rs->id])}}" class="btn btn-sm btn-primary">Edit</a></td>
                                                <td><a href="{{route('admin.product.destroy', ['id'=>$rs->id])}}" class="btn btn-sm btn-danger">Delete</a></td>
                                                <td><a href="{{route('admin.product.show', ['id'=>$rs->id])}}" class="btn btn-sm btn-info">Show</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End  Product List -->
                    </div>
                </div>
            </div>



            <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        This is a free responsive admin under cc3.0 license, so you can use it for personal and commercial use.
                        <br />
                        Enjoy this admin and for more please keep looking <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
