@extends('layouts.adminwindow')

@section('title', 'Show Message: {{$data->title}}')


@section('content')
    <link href="assets/css/bootstrap-fileupload.min.css" rel="stylesheet" />
    <div id="page-wrapper">
        <div class="panel panel-info">
            <div class="panel-heading">
                Edit Message: {{$data->title}}
            </div>
            <div class="col-md-6">
                <!--    Context Classes  -->
                <div class="panel panel-default">
                     <div class="panel-heading">
                        Details Message Data
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">

                                <tr>
                                    <th style="width: 150px" >Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Name & Surname</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Phone</th>
                                    <td>{{$data->phone}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >E-Mail</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Message</th>
                                    <td>{{$data->message}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Ip Number</th>
                                    <td>{{$data->ip}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--  end  Context Classes  -->
            </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
