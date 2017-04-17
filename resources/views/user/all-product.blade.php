@extends('layouts.user-layout')

@section('title')
	All product
@endsection

@section('contents')
<h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">Products</h2>
<section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
	@foreach($products as $product)
	<div class="product_item specials">
		<figure class="r_corners photoframe shadow relative animate_ftb long">
			<!--product preview-->
			<a href="{{ url('product') }}/{{ $product->id }}" class="d_block relative wrapper pp_wrap">
				<img src="{{ url('upload/product')}}/{{ $product->photo }}" class="tr_all_hover" width="240px" height="240px" alt="">
			</a>
			<!--description and price of product-->
			<figcaption>
				<h5 class="m_bottom_10"><a href="#" class="color_dark">{{ $product->name }}</a></h5>
				<div class="clearfix">
					<p class="scheme_color f_left f_size_large m_bottom_15">${{ $product->price }}</p>
					<!--rating-->
				</div>
				<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">Detail</button>
			</figcaption>
		</figure>
	</div>
	@endforeach
	<!--product item-->
</section>
	<div class="pull-right">
		{{ $products->links() }}
	</div>
	<div class="clearfix"></div>
@endsection