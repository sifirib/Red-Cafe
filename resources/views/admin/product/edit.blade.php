@extends('layouts.adminbase')

@section('title', 'Edit Category', $data->title)

@section('head')con
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit Product: {{$data->title}}</h1>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                EDIT PRODUCT
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{route('admin.product.update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label>Parent Product</label>
                                        <select class="form-control select2" name="category_id" style="">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

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
                                        <label>Price</label>
                                        <input class="form-control" type="number" name="price" value="{{$data->price}}">
                                        {{--                                        <p class="help-block">Help text here.</p>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input class="form-control" type="number" name="quantity" value="{{$data->quantity}}">
                                        {{--                                        <p class="help-block">Help text here.</p>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Minimum Quantity</label>
                                        <input class="form-control" type="number" name="minquantity" value="{{$data->minquantity}}">
                                        {{--                                        <p class="help-block">Help text here.</p>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Maximum Quantity</label>
                                        <input class="form-control" type="number" name="maxquantity" value="{{$data->maxquantity}}">
                                        {{--                                        <p class="help-block">Help text here.</p>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Tax %</label>
                                        <input class="form-control" type="number" name="tax" value="{{$data->tax}}">
                                        {{--                                        <p class="help-block">Help text here.</p>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Detail</label>
                                        <textarea class="form-control" name="detail" id="detail" placeholder="Tell some features of your product">{{$data->detail}}</textarea>

                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#detail' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Upload Image
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <div>
                                                    <span class="btn btn-file btn-success"><span class="fileupload-new"></span><span class="fileupload-exists"></span><input type="file" name="image"></span>
{{--                                                    <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>--}}
                                                </div>
                                            </div>
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
