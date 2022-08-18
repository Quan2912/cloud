@extends('layouts.admin')
@section('main-content')
<div class="row">
    <div class="col-xs-12 col-md-12 col-lg-12">
        
        <div class="panel panel-primary">
            <div class="panel-heading"><h1>Add Slider</h1></div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input!
                    <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel-body">
                    
                <form  method="post" action="{{route('sliders.add')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="margin-bottom:40px">
                        <div class="col-xs-8">
                            <div class="form-group" >
                                <label>Title</label>
                                <input required type="text" name="title" class="form-control" placeholder="Name" style="width: 150%">
                            </div>           
                            <div class="form-group" >
                                <label>Image</label>
                                <input required id="img" type="file" name="image" class="form-control hidden" >
                            </div>                         
                            
                            
                            
                            <input type="submit" name="submit" value="OK" class="btn btn-primary">
                            <a href="{{route('sliders.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </div>
                </form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
@endsection
