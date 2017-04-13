@extends('layouts.admin-layout')

@section('title')
	Detail
@endsection

@section('contents')
	<h3 style="margin-bottom:5%;">Detail product</h3>

	<div class="col-md-12">
		<div class="col-md-3 col-md-offset1">
			<img src="{{ url('upload/product') }}/{{ $product->photo }}" class="img-responsive img-circle">
		</div>
		<div class="col-md-7">
			<form class="form-horizontal">
				<div class="forsm-group">
					<label class="control-label col-sm-3">Name : </label>
					<div class="col-sm-8">
						<p class="form-control">{{ $product->name }}</p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Price : </label>
					<div class="col-sm-8">
						<p class="form-control">{{ $product->price }} $</p>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Description : </label>
					<div class="col-sm-8">
						<p class="form-control">{{ $product->description }}</p>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection