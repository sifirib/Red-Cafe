@extends('layouts.adminbase')

@section('title', 'Show Category: ', $data->title)

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">{{$data->title}}</h1>
                    <a href="/admin/category/edit/{{$data->id}}" class="btn btn-default bg-info" style="">Edit</a>
                    <a href="/admin/category/destroy/{{$data->id}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-default bg-danger" style="">Delete</a>

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
                                                <th>Title</th>
                                                <td>{{$data->title}}</td>
                                            </tr>
                                            <tr>
                                                <th>Image</th>
                                                <td></td>
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
