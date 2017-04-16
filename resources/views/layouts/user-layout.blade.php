<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>Tung beooo <3</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('css/bootstrap/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('css/camera.css')}}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('css/owl.carousel.css')}}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('css/owl.transitions.css')}}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('css/jquery.custom-scrollbar.css')}}">
		<link rel="stylesheet" type="text/css" media="all" href="{{ url('css/style.css')}}">
		<!--font include-->
		<link href="{{ url('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{ url('css/font-awesome/css/styleswitcher.css')}}" rel="stylesheet">
		<!-- <script src="js/modernizr.js"></script> -->
	</head>
	<body>
		<!--boxed layout-->
		<div class="boxed_layout relative w_xs_auto">
			<!--[if (lt IE 9) | IE 9]>
				<div style="background:#fff;padding:8px 0 10px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<!--markup header-->
			<header role="banner">
				<!--header top part-->
				<section class="h_top_part">
					<div class="container">
						<div class="row clearfix">
							<nav class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c pull-right">
								<ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
									@if(!Auth::check())
									<li><a href="{{ route('login') }}" class="default_t_color">Login</a></li>
									<li><a href="{{ route('register') }}" class="default_t_color">Register</a></li>
									@else
                                <a href="{{ url('profile') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} </a> 
                                <a href="{{ route('logout') }}" onclick="
                                event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                | Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
									@endif
								</ul>
							</nav>
						</div>
					</div>
				</section>
				<!--header bottom part-->
				<section class="h_bot_part container">
					<div class="clearfix row">
						<div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
							<a href="{{ url('/') }}" class="logo m_xs_bottom_15 d_xs_inline_b">
								<img src="{{ url('upload/images/logo.png')}}" alt="">
							</a>
						</div>
					</div>
				</section>
				<!--main menu container-->
				<section class="menu_wrap relative">
					<div class="container clearfix">
						<!--button for responsive menu-->
						<button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
						</button>
						<!--main menu-->
						<nav role="navigation" class="f_left f_xs_none d_xs_none">	
							<ul class="horizontal_list main_menu clearfix">
								<li class="current relative f_xs_none m_xs_bottom_5"><a href="{{ url('/') }}" class="tr_delay_hover color_light tt_uppercase"><b>Home</b></a>
									<!--sub menu-->
								</li>
								<li class="relative f_xs_none m_xs_bottom_5"><a href="contact.html" class="tr_delay_hover color_light tt_uppercase"><b>Contact</b></a></li>
							</ul>
						</nav>
					</div>
				</section>
			</header>
			<!--slider-->
			
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">Products</h2>
					<!--filter navigation of products-->
					<!--products-->
					@yield('contents')
					<!--banners-->
					<!--product brands-->
					<div class="clearfix m_bottom_25 m_sm_bottom_20">
						<h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">Product Brands</h2>
					</div>
					<!--product brands carousel-->
					<div class="product_brands m_bottom_45 m_sm_bottom_35">
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
						<a href="#" class="d_block t_align_c animate_fade"><img src="{{ url('upload/images/brand_logo.jpg')}}" alt=""></a>
					</div>
					<!--blog-->
					
					<!--banners-->
					<div class="row clearfix">
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="{{ url('upload/images/banner_img_3.png')}}" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>100% Satisfaction</b><br><span class="color_dark">Guaranteed</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="#" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="{{ url('upload/images/banner_img_4.png')}}" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>Free Shipping</b><br><span class="color_dark">On All Items</span>
									</span>
								</span>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4">
							<a href="#" class="d_block animate_ftb h_md_auto banner_type_2 r_corners orange t_align_c tt_uppercase vc_child n_sm_vc_child">
								<span class="d_inline_middle">
									<img class="d_inline_middle m_md_bottom_5" src="{{ url('upload/images/banner_img_5.png')}}" alt="">
									<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
										<b>Great Daily Deals</b><br><span class="color_dark">Shop Now!</span>
									</span>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--markup footer-->
			<footer id="footer">
				<div class="footer_top_part">
					<div class="container">
						<div class="row clearfix">
					
						</div>
					</div>
				</div>
				<!--copyright part-->
				<div class="footer_bottom_part">
					<div class="container clearfix t_mxs_align_c">
						<p class="f_left f_mxs_none m_mxs_bottom_10">&copy; 2014 <span class="color_light">Flatastic</span>. All Rights Reserved.</p>
						<ul class="f_right horizontal_list clearfix f_mxs_none d_mxs_inline_b">
							<li><img src="{{ url('upload/images/payment_img_1.png')}}" alt=""></li>
							<li class="m_left_5"><img src="{{ url('upload/images/payment_img_2.png')}}" alt=""></li>
							<li class="m_left_5"><img src="{{ url('upload/images/payment_img_3.png')}}" alt=""></li>
							<li class="m_left_5"><img src="{{ url('upload/images/payment_img_4.png')}}" alt=""></li>
							<li class="m_left_5"><img src="{{ url('upload/images/payment_img_5.png')}}" alt=""></li>
						</ul>
					</div>
				</div>
			</footer>
		</div>
		<!--social widgets-->
		<!--login popup-->
		<div class="popup_wrap d_none" id="login_popup">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
				<h3 class="m_bottom_20 color_dark">Log In</h3>
				<form>
					<ul>
						<li class="m_bottom_15">
							<label for="username" class="m_bottom_5 d_inline_b">Username</label><br>
							<input type="text" name="" id="username" class="r_corners full_width">
						</li>
						<li class="m_bottom_25">
							<label for="password" class="m_bottom_5 d_inline_b">Password</label><br>
							<input type="password" name="" id="password" class="r_corners full_width">
						</li>
						<li class="m_bottom_15">
							<input type="checkbox" class="d_none" id="checkbox_10"><label for="checkbox_10">Remember me</label>
						</li>
						<li class="clearfix m_bottom_30">
							<button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15">Log In</button>
							<div class="f_right f_size_medium f_mxs_none">
								<a href="#" class="color_dark">Forgot your password?</a><br>
								<a href="#" class="color_dark">Forgot your username?</a>
							</div>
						</li>
					</ul>
				</form>
				<footer class="bg_light_color_1 t_mxs_align_c">
					<h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">New Customer?</h3>
					<a href="#" role="button" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Create an Account</a>
				</footer>
			</section>
		</div>
		<!--custom popup-->
		<!--scripts include-->
		<script src="{{ url('js/jquery.min.js')}}"></script>
		<script src="{{ url('js/jquery-migrate-1.2.1.min.js')}}"></script>
		<script src="{{ url('js/retina.js')}}"></script>
		<script src="{{ url('js/camera.min.js')}}"></script>
		<!-- <script src="js/jquery.easing.1.3.js"></script> -->
		<script src="{{ url('js/waypoints.min.js')}}"></script>
		<script src="{{ url('js/jquery.isotope.min.js')}}"></script>
		<script src="{{ url('js/owl.carousel.min.js')}}"></script>
		<script src="{{ url('js/jquery.tweet.min.js')}}"></script>
		<script src="{{ url('js/jquery.custom-scrollbar.js')}}"></script>
		<script src="{{ url('js/scripts.js')}}"></script>
	</body>
</html>