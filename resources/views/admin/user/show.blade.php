@extends('layouts.adminwindow')

@section('title', 'User Detail: {{$data->title}}')


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
                        Details User Data
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
                                    <th style="width: 30px" >E-Mail</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Roles</th>
                                    <td>
                                        @foreach($data->roles as $role)
                                            {{$role->name}}
                                            <a onclick="return confirm('Are you sure?')" href="{{route('admin.user.destroyrole',['uid'=>$data -> id, 'rid'=>$role -> id])}}"class="btn btn-danger">[x]</a>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 30px" >Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th>Add Role to User</th>
                                    <td>
                                        <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                         @csrf
                                          <select name="role_id">
                                              @foreach($roles as $role)
                                              <option value="{{$role->id}}">{{$role->name}}</option>
                                              @endforeach
                                          </select>
                                              <div class="card-footer">
                                                  <button type="submit" class="btn btn-primary">Add Role</button>
                                              </div>
                                        </form>
                                    </td>
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
