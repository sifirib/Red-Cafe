@extends('layouts.adminbase')

@section('title', 'Edit Category', $data->title)

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit Category: {{$data->title}}</h1>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                EDIT CATEGORY
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{route('admin.category.update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" type="text" name="title" value="{{$data->title}}">
{{--                                        <p class="help-block">Help text here.</p>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}">
{{--                                        <p class="help-block">Help text here.</p>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" name="description" value="{{$data->description}}">
{{--                                        <p class="help-block">Help text here.</p>--}}
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            File Uploads
                                        </div>
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <label class="control-label col-lg-4">No Input</label>
                                                <div class="">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <span class="btn btn-file btn-default">
                                                            <span class="fileupload-new">Select file</span>
                                                            <span class="fileupload-exists">Change</span>
                                                            <input type="file">
                                                        </span>
                                                        <span class="fileupload-preview"></span>
                                                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-4">Image Upload</label>
                                                <div class="">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                                        <div>
                                                            <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span>
                                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-lg-4">Pre Defined Image</label>
                                                <div class="">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="{{asset("assets")}}/admin/img/demoUpload.jpg" alt=""></div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                            <span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file"></span>
                                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="alert alert-warning"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-info">Update</button>

                                </form>
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
