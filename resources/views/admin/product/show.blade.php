@extends('layouts.adminbase')

@section('title', 'Show Category: ', $data->title)

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">{{$data->title}}</h1>
                    <a href="{{route('admin.product.edit', ['id'=>$data->id])}}" class="btn btn-default bg-info" style="">Edit</a>
                    <a href="{{route('admin.product.destroy', ['id'=>$data->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-default bg-danger" style="">Delete</a>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Details
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th style="width: 150px">ID</th>
                                            <td>{{$data->id}}</td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td>{{$data->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Keywords</th>
                                            <td>{{$data->keywords}}</td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>{{$data->description}}</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>{{$data->price}}</td>
                                        </tr>
                                        <tr>
                                            <th>Quantity</th>
                                            <td>{{$data->quantity}}</td>
                                        </tr>
                                        <tr>
                                            <th>Minimum Quantity</th>
                                            <td>{{$data->minquantity}}</td>
                                        </tr>
                                        <tr>
                                            <th>Maximum Quantity</th>
                                            <td>{{$data->maxquantity}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tax</th>
                                            <td>{{$data->tax}}</td>
                                        </tr>
                                        <tr>
                                            <th>Detail</th>
                                            <td>{!! $data->detail !!}</td>
                                        </tr>
                                        <tr>
                                            <th>Image</th>
                                            <td>
                                                @if ($data->image)
                                                    <img src="{{Storage::url($data->image)}}" style="height: 120px">
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{$data->status}}</td>
                                        </tr>
                                        <tr>
                                            <th>Created Date</th>
                                            <td>{{$data->created_at}}</td>
                                        </tr>
                                        <tr>
                                            <th>Updated Date</th>
                                            <td>{{$data->updated_at}}</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
