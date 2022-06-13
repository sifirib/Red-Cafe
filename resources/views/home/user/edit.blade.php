
@extends('layouts.frontbase')

@section('title', 'Game Edit' )
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
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
                        <li class="breadcrumb-item active">User Games</li>
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
                                <strong>Game Edit</strong>
                                <div class="panel-body">
                                    <form role="form" action="{{route('userpanel.gameupdate',['id'=>$data -> id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label>Parent Game</label>

                                            <select class="form-control select2" name="category_id">
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                                        {{App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                                    </option>
                                                @endforeach
                                            </select>

                                            <label>Title</label>
                                            <input class="form-control" type="text" name="title" value="{{$data->title}}" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input class="form-control" type="text" name="keywords" value="{{$data->keywords}}" placeholder="keywords">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input class="form-control" type="text" name="description" value="{{$data->description}}" placeholder="description">
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input class="form-control" type="text" name="date" value="{{$data->date}}"  placeholder="description">
                                        </div>
                                        <div class="form-group">
                                            <label>Rating</label>
                                            <input class="form-control" type="text" name="rating" value="{{$data->rating}}" step="0.01" placeholder="description">
                                        </div>
                                        <div class="form-group">
                                            <label>Hours</label>
                                            <input class="form-control" type="number" name="hours" value="{{$data->hours}}"  step="0.01">
                                        </div>
                                        <div class="form-group">
                                            <label>Summary</label>
                                            <input class="form-control" type="text" name="summary" value="{{$data->summary}}"  placeholder="description">
                                        </div>
                                        <div class="form-group">
                                            <label>Detail</label>
                                            <textarea class="form-control"  name="detail" id="detail" >
                                                {{$data->detail}}
                                            </textarea>
                                            <body>
                                            <div id="editor">This is some sample content.</div>
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
                                            </body>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Image Upload</label>
                                            <div class="">
                                                <div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" value="" name="image">
                                                    <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px; line-height: 150px;"></div>
                                                    <div>
                                    <span class="btn btn-file btn-success"><span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="image"></span>
                                                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
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


                                        <button type="submit" class="btn btn-info">Update Data</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function () {
            $('. textarea').summernote()
        })
    </script>
@endsection
@endsection
