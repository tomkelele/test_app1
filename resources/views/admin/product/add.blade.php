@extends('layouts.admin-layout')

@section('title')
	Add new product
@endsection

@section('contents')
	<h3>Add new product</h3>
	<div class="col-md-10 col-md-offset-1">
		<form class="form-horizontal" method="POST" action="{{ route('admin.product.postInsert') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="form-group">
				<label class="control-label col-sm-2" for="name">Name : </label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="name">
					@if($errors->first('name'))
					<p style="color:red;">{{ $errors->first('name') }}</p>
					@endif
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="price">Price : </label>
				<div class="col-sm-5">
					<input type="text" class="form-control" name="price">
					@if($errors->first('price'))
					<p style="color:red;">{{ $errors->first('price') }}</p>
					@endif
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="price">Photo : </label>
				<div class="col-sm-5">
					<input type="file" class="form-control" name="photo">
					@if($errors->first('photo'))
					<p style="color:red;">{{ $errors->first('photo') }}</p>
					@endif
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="description">Description : </label>
				<div class="col-sm-5">
					<textarea name="description" class="form-control" rows="5"></textarea>
					@if($errors->first('description'))
					<p style="color:red;">{{ $errors->first('description') }}</p>
					@endif
				</div>
			</div>
			<div class="form-group" style="text-align: center;">
				<button type="submit" class="btn btn-success">Add</button>
				<a href="{{ url('/admin/product') }}" class="btn btn-primary">Cancel</a>
			</div>
		</form>
	</div>
@endsection