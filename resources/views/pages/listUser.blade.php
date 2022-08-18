@extends('layouts.admin')

@section('main-content')
<div class="col-xs-12 col-md-7 col-lg-7">
    <div class="panel panel-primary">
        <div class="panel_heading"><h1>User List</h1></div>
        @if ($message=Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
        @endif
        <div class="panel-body">
            <div class="boostrap-table">
                
                
                <table class="table table-bodered" style="width: 120%">
                    <thead>
                        <tr class="bg-primary">
                            <th style="color: #fff">No.</th>
                            <th style="width:15%; color: #fff">Name</th>
                            <th style="color: #fff">Description</th>
                            <th style="color: #fff; width: 20%">Options</th>
                        </tr>
                        @foreach ($user as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value -> name}}</td>
                            <td>{{$value -> last_name}}</td>
                            <td>{{$value -> email}}</td>
                            <td>{{$value -> role}}</td>

                           
                            <td>
                                <a href="{{asset('users/edit/'.$value->id)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit Role</a>
                                <a href="{{asset('users/delete/'.$value->id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>
                            </td>
                        </tr>    
                        @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection