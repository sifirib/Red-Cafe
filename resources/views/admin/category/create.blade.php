@extends('layouts.adminbase')

@section('title', 'Add Category')

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add Category</h1>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                ADD CATEGORY
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label>Parent Category</label>
                                        <select class="form-control select2" name="parent_id" style="">
                                            <option value="0" selected="selected">Main Category</option>
                                            @foreach($data as $rs)
                                                <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" type="text" name="title">
                                        {{--                                        <p class="help-block">Help text here.</p>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input class="form-control" type="text" name="keywords">
                                        {{--                                        <p class="help-block">Help text here.</p>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input class="form-control" type="text" name="description">
                                        {{--                                        <p class="help-block">Help text here.</p>--}}
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Upload Image
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <div>
                                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span><span class="fileupload-exists"> Change</span><input type="file" name="image"></span>
                                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-info">Save</button>

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
