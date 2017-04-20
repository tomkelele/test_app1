@extends('layouts.admin-layout')

@section('title')
	Manage Product
@endsection

@section('contents')
	<h3 style="margin-bottom:4%;">Manage product</h3>
	<div class="col-md-10 col-md-offset-1">
		<div class="col-sm-12">
			<a href="{{ route('admin.product.getInsert') }}" class="btn btn-primary pull-right">Add product</a>
		</div>
		<div class="col-sm-12">
			@if(session()->has('message-added'))
			<div class="alert alert-success alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>{{ session()->get('message-added') }}</strong>
			</div>
			@elseif(session()->has('message-edited'))
			<div class="alert alert-success alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>{{ session()->get('message-edited') }}</strong>
			</div>
			@elseif(session()->has('message-deleted'))
			<div class="alert alert-danger alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<strong>{{ session()->get('message-deleted')}}</strong>
			</div>
			@endif
		</div>
		<div class="col-sm-12">
			<table class="table table-striped" style="table-layout: fixed;">
				<thead>
					<th>Name</th>
					<th>Price</th>
					<th>Photo</th>
					<th>Description</th>
					<th>Action</th>
				</thead>
				<tbody>
					@foreach($products as $product)
					<tr>
						<td style="word-wrap:break-word;">{{ $product->name }}</div></td>
						<td>{{ $product->price }} $</td>
						<td><img src="{{ url('upload/product') }}/{{ $product->photo }}" width="80px" height="80px"></td>
						<td style="word-wrap:break-word;">{{ $product->description }}</td>
						<td><a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning">Edit</a><a href="{{ route('admin.product.delete', $product->id) }}" class="btn btn-danger">Delete</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="pull-right">{{ $products->links() }}</div>
		</div>
	</div>
@endsection