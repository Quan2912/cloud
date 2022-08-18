@extends('layouts.admin')

@section('main-content')
<div class="col-xs-12 col-md-7 col-lg-7">
    <div class="panel panel-primary">
        <div class="panel_heading"><h1>Slider List</h1></div>
        @if ($message=Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
        @endif
        <div class="panel-body">
            <div class="boostrap-table">
                <a href="{{route('sliders.add')}}" class="btn btn-primary">Add Slider</a>
                
                <table class="table table-bodered" style="width: 120%">
                    <thead>
                        <tr class="bg-primary">
                            <th style="color: #fff">No.</th>
                            <th style="color: #fff">Title</th>
                            
                            <th style="color: #fff">Image</th>
                            <th style="color: #fff; width: 20%">Options</th>
                        </tr>
                        @foreach ($slider as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value -> title}}</td>
                            
                            <td>
                                <img src="{{asset('uploads/img/'.$value->image)}}" class="category-image" style="width: 80px; height: 80px;" alt="Image here">
                            </td>

                            <td>
                                <a href="{{asset('sliders/edit/'.$value->id)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                                <a href="{{asset('sliders/delete/'.$value->id)}}" onclick="return confirm('Are you sure you want to delete this slider?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>
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