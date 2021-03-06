@extends('layouts.user-layout')

@section('title')
	{{ $product->name }}
@endsection

@section('contents')
<h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">{{ $product->name }}</h2>
<section style="margin-bottom:5%;">
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-4">
				<img src="{{ url('upload/product') }}/{{ $product->photo }}">
			</div> 
			<div class="col-md-5 col-md-offset-1">
				<h3 style="margin-bottom:6%;"><strong>{{ $product->name }}</strong></h3>
				<h3 style="margin-bottom:6%;"><strong>{{ $product->price }} $</strong></h3>
				<h3 style="margin-bottom:6%;"><strong>Product Description</strong></h3>
				<p>{{ $product->description }}</p>
			</div>
		</div>
	</div>
</section>
<div class="clearfix"></div>
@endsection