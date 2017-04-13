@extends('layouts.admin-layout')

@section('title')
	Edit product
@endsection

@section('contents')
	<h3>Edit product</h3>
	<div class="col-md-10 col-md-offset-1">
		<form class="form-horizontal" method="POST" action="{{ route('admin.product.postEdit', $product->id) }}" enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label col-sm-2" for="photo">Photo : </label>
				<div class="col-sm-5">
					<img src="{{ url('upload/product') }}/{{ $product->photo }}" width="180px" height="230px">
					<input type="file" class="form-control" name="photo">
					@if($errors->first('photo'))
					<p style="color:red;">{{ $errors->first('photo') }}</p>
					@endif
				</div>
			</div>
			<div class="form-group">
			    <label class="control-label col-sm-2" for="name">Name :</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="name" value="{{ $product->name }}">
			      @if($errors->first('name'))
					<p style="color:red;">{{ $errors->first('name') }}</p>
					@endif
			    </div>
			</div>
			<div class="form-group">
			    <label class="control-label col-sm-2" for="price">Price :</label>
			    <div class="col-sm-5">
			      <input type="text" class="form-control" name="price" value="{{ $product->price }}">
			      @if($errors->first('price'))
					<p style="color:red;">{{ $errors->first('price') }}</p>
					@endif
			    </div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="role">Description :</label>
				<div class="col-sm-5">
					<textarea class="form-control" name="description" rows="4">{{ $product->description }}</textarea>
					@if($errors->first('description'))
					<p style="color:red;">{{ $errors->first('description') }}</p>
					@endif
				</div>
			</div>
			<div class="form-group" style="text-align: center;">
				<button type="submit" class="btn btn-success">Edit</button>
				<a href="{{ url('/admin/product') }}" class="btn btn-primary">Cancel</a>
			</div>	
			{{ csrf_field() }}
		</form>
	</div>
@endsection