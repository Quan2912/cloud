@extends('layouts.admin')
@section('main-content')

<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-12">
		
		<div class="panel panel-primary">
			<div class="panel-heading"><h1>Product List</h1></div>
                @if ($message=Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
			<div class="panel-body">
				<div class="bootstrap-table">
					<div class="table-responsive">
						<a href="{{route('products.add')}}" class="btn btn-primary">Add Product</a>
						<table class="table table-bordered" style="margin-top:20px;">				
							<thead>
								<tr class="bg-primary">
									<th style="color: #fff" with="5%">No.</th>
									<th style="color: #fff" width="20%">Name</th>
                                    <th style="color: #fff" width="8%">Images</th>
									<th style="color: #fff">Price</th>
									<th style="color: #fff" width="25%">Description</th>
									<th style="color: #fff" width="20%">Category</th>
									<th style="color: #fff">Options</th>
								</tr>
							</thead>
							@foreach ($product as $key => $value)
							<tbody>
								<tr>
									<td>{{$key+1}}</td>
									<td>{{$value -> name}}</td>
									<td>
										<img src="{{asset('uploads/img/'.$value->image)}}" class="category-image" style="width: 80px; height: 80px;" alt="Image here">
									</td>
                                    <td>{{$value -> price}}</td>
									<td>{{$value -> description}}</td>
									<td>{{$value -> category->name}}</td>
									<td>
										<a href="{{route('products.edit', $value->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</a>
										<a href="{{route('products.delete', $value->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a>
									</td>
								</tr>
							</tbody>
							@endforeach
						</table>							
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
@endsection