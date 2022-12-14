<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>N6-Store</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
	
    <link rel="shortcut icon" href="{{{'public/frontend/images/ico/favicon.ico'}}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +34 123 888 999 </a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Nhom6@gmail.com </a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left" >
							<a href="{{URL::to('/Trang_Chu')}}" ><img width="140" height="50" src="{{URL::to('public/frontend/images/logo_store.png')}}" alt="logo_web" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									VIE
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Ti???ng Vi???t</a></li>
									<li><a href="#">English</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									VND
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">VND</a></li>
									<li><a href="#">$</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href="#"><i class="fa fa-star"></i>Y??u Th??ch</a></li> -->

								<?php
									use Illuminate\Support\Facades\Session;
									$user_id = Session::get('user_id');
									$shipping_id = Session::get('shipping_id');
									if($user_id != NULL && $shipping_id == NULL){
								?>
								<li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i>Thanh To??n</a></li>
								<?php
								} else if($user_id != NULL && $shipping_id != NULL){
									?>
									<li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i>Thanh To??n</a></li>
									<?php
								} else {
									?>
									<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i>Thanh To??n</a></li>
									<?php
								}
									?>
									

								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i>Gi??? H??ng</a></li>

								
								<?php									
									$user_id = Session::get('user_id');
									if($user_id != NULL){
								?>
								<li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i>????ng Xu???t</a></li>
								<?php
								} else{
									?>
									<li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i>????ng Nh???p</a></li>
									<?php
								}
									?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{URL::to('/Trang_Chu')}}" class="active">Trang Ch???</a></li>
								<li class="dropdown"><a href="#">C???a H??ng<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/')}}">S???n Ph???m</a></li>
										<li><a href="{{URL::to('/show-cart')}}">Gi??? H??ng</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Tin T???c<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{URL::to('/blog')}}">Danh S??ch Tin T???c</a></li>
										<li><a href="{{URL::to('/other-blog')}}">Tin T???c Kh??c</a></li>
                                    </ul>
                                </li> 
								<!-- <li><a href="{{URL::to('/error')}}">404</a></li> -->
								<li><a href="{{URL::to('/contact')}}">Li??n H???</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-5">
						<form action="{{URL::to('/tim-kiem')}}" method="POST">
							{{ csrf_field() }}
							<div class="search_box pull-right">
								<input type="text" name="keywords_submit" placeholder="T??m ki???m s???n ph???m">
							</div>
						</form>						
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>N6</span>-STORE</h1>
									<h2> Ph???m m???m M?? ngu???n m??? </h2>
									<p>
										Nh??m 6 - L???p M?? ngu???n m??? 
										Tr?????ng ?????i h???c c??ng nghi???p H?? N???i.
									</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img style="width:400px; height:420px;" src="{{URL::to('public/frontend/images/a18.jpg')}}" class="girl img-responsive" alt="" />									
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>N6</span>-STORE</h1>
									<h2>100% Responsive Design</h2>
									<p> M??n h???c: Ph???n m???m m?? ngu???n m??? </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img style="width:400px; height:420px;" src="{{URL::to('public/frontend/images/a1.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>N6</span>-STORE</h1>
									<h2> L???p CNTT5 </h2>
									<p>
										M??n h???c: Ph???n m???m m?? ngu???n m???
									</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img style="width:400px; height:420px;" src="{{URL::to('public/frontend/images/a12.jpg')}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>DANH M???C S???N PH???M</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($category as $key =>$cate)							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
									</div>
								</div>
							@endforeach
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>TH????NG HI???U S???N PH???M</h2>
							<div class="brands-name">								
								<ul class="nav nav-pills nav-stacked">
									@foreach($brand as $key =>$brand)
										<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>	
									@endforeach								
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>PH???M VI GI??</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left"> 0 VND</b> <b class="pull-right"> 15.000.000 VND</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							
							<img width="270" height="170px" src="{{URL::to('public/frontend/images/left_1.png')}}" alt="" />
							<!-- <img src="{{URL::to('public/frontend/images/shipping.jpg')}}" alt="" /> -->
						</div><!--/shipping-->

						<div class="shipping text-center"><!--shipping-->
							<img width="270" height="170px" src="{{URL::to('public/frontend/images/left_2.png')}}" alt="" />
						</div><!--/shipping-->

						<div class="shipping text-center"><!--shipping-->
							<img width="270" height="200px" src="{{URL::to('public/frontend/images/left_3.png')}}" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>N6</span>-STORE</h2>
							<p> M??n h???c: Ph???n m???m m?? ngu???n m??? </p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
                                        <img src="{{URL::to('public/frontend/images/a1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>GVN Minion i380</p>
								<h2></h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
									    <img src="{{URL::to('public/frontend/images/a2.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>GVN Minion i380</p>
								<h2>11/11/2022</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
                                        <img src="{{URL::to('public/frontend/images/a5.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>GVN Minion i380</p>
								<h2>11/11/2022</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
                                        <img src="{{URL::to('public/frontend/images/a20.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>GVN Minion i380</p>
								<h2>11/11/2022</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{URL::to('public/frontend/images/map.png')}}" alt="" />
							<p> S??? 298 ??. C???u Di???n, Minh Khai, B???c T??? Li??m, H?? N???i  </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>D???ch V???</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Tr??? Gi??p Tr???c Tuy???n</a></li>
								<li><a href="#">Li??n h??? ch??ng t??i</a></li>
								<li><a href="#">T??nh tr???ng ?????t h??ng</a></li>
								<li><a href="#">Thay ?????i ?????a ??i???m</a></li>
								<li><a href="#">C??u h???i th?????ng g???p</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Th??? Lo???i</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">PC</a></li>
								<li><a href="#">Laptop</a></li>
								<li><a href="#">??i???n tho???i</a></li>
								<li><a href="#">????? ??i???n t???</a></li>
								<li><a href="#">Kh??c</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>CH??NH S??CH</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">??i???u kho???n s??? d???ng</a></li>
								<li><a href="#">Ch??nh s??ch b???o m???t</a></li>
								<li><a href="#">Ch??nh s??ch ho??n l???i ti???n</a></li>
								<li><a href="#">H??? th???ng thanh to??n</a></li>
								<li><a href="#">H??? th???ng v??</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>GI???I THI???U V??? STORE</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Th??ng tin c??ng ty</a></li>
								<li><a href="#">Ngh??? nghi???p</a></li>
								<li><a href="#">V??? tr?? c???a h??ng</a></li>
								<li><a href="#">Ch????ng tr??nh li??n k???t</a></li>
								<li><a href="#">B???n quy???n</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>LI??N H???</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="?????a ch??? email c???a b???n" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Nh???n c??c b???n c???p nh???t g???n ????y nh???t t???
???									???trang web c???a ch??ng t??i v?? ???????c c???p nh???t b???n th??n c???a b???n.</p>
							</form>
						</div>
					</div>					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">?? 2022 Hanoi University Of Industry | Design By <a href="http://w3layouts.com">Group 6 </a></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	 
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
	<script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.add-to-cart').click(function(){
				var id = $(this).data('id');
				var cart_product_id = $('.cart_product_id_' + id).val();
				var cart_product_name = $('.cart_product_name_' + id).val();
				var cart_product_image = $('.cart_product_image_' + id).val();
				var cart_product_price = $('.cart_product_price_' + id).val();
				var cart_product_qty = $('.cart_product_qty_' + id).val();
				var _token = $('input[name="_token"]').val();
				
				$.ajax({
					url: "{{url('/add-cart-ajax')}}",
					method: 'POST',
					data: {cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},

					success:function(data){
						swal({
                            title: "???? th??m s???n ph???m v??o gi??? h??ng",
							text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
							showCancelButton: true,
							cancelButtonText: "Xem ti???p",
							confirmButtonClass: "btn-success",
							confirmButtonText: "??i ?????n gi??? h??ng",
							closeOnConfirm: false
						},
						function() {
							window.location.href = "{{url('/gio-hang')}}";
						});
					}
				});
			});
		});
	</script>
</body>
</html>