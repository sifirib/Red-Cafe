@extends('layouts.adminwindow')

@section('title', 'Product Image Gallery')

@section('content')

    <h3>{{$product->title}}</h3>

    <form role="form" action="{{route('admin.image.store', ['pid' => $product->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="panel panel-default">

            <div class="panel-body">
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control" type="text" name="title">
                    {{--                                        <p class="help-block">Help text here.</p>--}}
                </div>
                <div class="form-group">
                    <div>
                        <span class="btn btn-file btn-success"><span class="fileupload-new"></span><span class="fileupload-exists"></span><input type="file" name="image"></span>
{{--                        <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>--}}
                        <button type="submit" class="btn btn-info">Save</button>

                    </div>
                </div>


            </div>
        </div>

    </form>


    <!--   Product Image List -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Product Image List
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th style="width: 40px">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $rs)
                        <tr class="success">
                            <td>{{$rs->id}}</td>
                            <td>{{$rs->title}}</td>
                            <td>
                                @if ($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 60px">
                                @endif
                            </td>
                            <td><a href="{{route('admin.image.destroy', ['pid'=>$product->id, 'id'=>$rs->id])}}" onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <!-- End  Category List -->

@endsection

