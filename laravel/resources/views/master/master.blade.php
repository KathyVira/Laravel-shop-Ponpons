<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>{{$title}}</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Ponpon Fashion" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- //for-mobile-apps -->
	<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset('css/fasthover.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/f7c313ecd4.js" crossorigin="anonymous"></script>


	<!-- js -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- //js -->
	<!-- countdown -->
	<link rel="stylesheet" href="{{asset('css/jquery.countdown.css')}}" />
	<!-- //countdown -->
	<!-- cart -->
	<script src="{{asset('js/simpleCart.min.js')}}"></script>
	<!-- cart -->
	<!-- for bootstrap working -->
	<script type="text/javascript" src="{{asset('js/bootstrap-3.1.1.min.js')}}"></script>
	<!-- //for bootstrap working -->
	<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smooth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
</head>

<body>

	<script>
		$('#myModal88').modal('show');
	</script>
	<div class="header">
		<div class="container">



			@if(!Session::get('user_id'))
			<!-- login -->
			<div class="w3l_login" onclick="window.location='{{url('user/login')}}'">
				<a href="" data-toggle="modal" data-target="#myModal88">
					<span class="glyphicon">
						<i class="fas fa-user"></i>
					</span>
				</a>
			</div>
			<!-- sing up -->
			<div class="w3l_login" onclick="window.location='{{url('user/signup')}}'">
				<a href="" data-toggle="modal" data-target="#myModal88">
					<span class="glyphicon">
						<i class="fas fa-user-plus"></i>
					</span>
				</a>
			</div>

			@else
			<!-- logout -->
			<div class="w3l_login" onclick="window.location='{{url('user/logout')}}'">
				<a href="" data-toggle="modal" data-target="#myModal88">
					<span class="glyphicon">
						<i class="fas fa-user-slash"></i>
					</span>
				</a>
			</div>
			<!-- admin panel -->
			@if(Session::get('is_admin') == true)
			<div class="w3l_login" onclick="window.location='{{url('cms/dashboard')}}'">
				<a href="" data-toggle="modal" data-target="#myModal88">
					<span class="glyphicon">
						<i class="fas fa-user-shield"></i>
					</span>
				</a>
			</div>
			@endif
            @endif





			<div class="w3l_logo">

				<h1><a href="{{'/'}}">Ponpon's Fashion<span>For Ponpons Lovers</span>
					</a></h1>
			</div>




			<div class="cart box_1">
				<a href="{{url('shop/GoToCart')}}">
					<div class="total">
						({{Cart::getTotalQuantity()}} items)
					</div>
					<img src="{{asset('images/bag.png')}}" alt="">

				</a>



				</a>
				{{-- <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p> --}}
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>


		</div>
	</div>
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
                </div>
                @if(Session::get('sm'))

                        <h4>
                            <div class="label label-info text-center sm " role="alert">
                                {{Session::get('sm')}}
                            </div>
                        </h4>

                @endif
                @if($errors)
                    @foreach($errors->all() as $message )

                            <h4>
                                <div class="label label-warning text-center " role="alert">
                                    {{$message}}
                                </div>
                            </h4>

                    @endforeach
                @endif

{{-- test// --}}
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav" >
						<li class="active"><a href="{{url('/')}}" class="act">Home</a></li>
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Categories</h6>

                                            @foreach ($categories as $data)
											    <li><a href="{{url('category/').'/'.$data['cat_name']}}">{{str_replace('_', ' ', $data['cat_name'])}}</a></li>
                                            @endforeach
											<!-- <li><a href="jeans.html">Jeans</a></li>
											<li><a href="shirts.html">Shirts & Tops<span>New</span></a></li> -->
										</ul>
									</div>
									<!-- <div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Ethnic Wear</h6>
											<li><a href="salwars.html">Salwars</a></li>
											<li><a href="sarees.html">Sarees<span>New</span></a></li>
											<li><a href="products.html"><i>Summer Store</i></a></li>
										</ul>
									</div> -->
									<!-- <div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Foot Wear</h6>
											<li><a href="sandals.html">Flats</a></li>
											<li><a href="sandals.html">Sandals</a></li>
											<li><a href="sandals.html">Boots</a></li>
											<li><a href="sandals.html">Heels</a></li>
										</ul>
									</div> -->
									{{-- <div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>50%<i>Off/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
									</div> --}}
									<div class="clearfix"></div>
								</div>

							</ul>
                        </li>
						<li><a href="{{url('shop/GoToCart')}}">Cart</a></li>

                        <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Information</h6>
                                            {{-- str_replace("_", " ", $data['cat_name']) --}}
                                             {{-- <li><a href="{{'/'}}">My Orders</a></li>  --}}
                                            @foreach ($pages as $data)
											    <li>
													<a href="{{url('pages').'/'. $data['page_name']}}">
														{{str_replace('_', ' ', $data['page_name'])}}
													</a>
												</li>
                                            @endforeach
											{{-- <li><a href="shirts.html">Shirts & Tops<span>New</span></a></li> --> --}}
										</ul>
									</div>


									<div class="clearfix"></div>
								</div>

							</ul>
						</li>
                        <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									@if(!Session::get('user_id'))
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<h6>Profile</h6>
												<li><a href="{{url('user/login')}}">Log in</a></li>
												<li><a href="{{url('user/signup')}}">Register new costumer</a></li>
											</ul>
										</div>
									@else
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<h6>Profile</h6>
                                                <li><a href="{{url('user/logout')}}">Log Out</a></li>
                                                	@if(Session::get('is_admin') == true)
                                                    	<li><a href="{{url('cms/dashboard')}}">Admin Panel</a></li>
													@endif
											</ul>
										</div>

                                    @endif


									<div class="clearfix"></div>
								</div>

							</ul>
						</li>



					</ul>

				</div>
			</nav>
		</div>

    </div>

	<!-- //header -->

<!-- banner -->
@foreach ($banner as $data)
	<div class="alert" id="banner">
		<div class="container">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<img class="img-responsive col-md-12"  src="{{$data['source']}} " alt="banner">
		</div>
	</div>
@endforeach

{{-- height="100" width="285" --}}
<!-- //banner -->



	<!-- <div class="container">  -->
	@yield('content')
	<!-- </div> -->

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<ul class="address">
						@foreach($contact as $data)
							<h4>{{$data['title']}}</h4>
							{{-- <i class="fas fa-headphones-alt"></i> --}}

							<li><i class="fas fa-map-marker-alt" aria-hidden="true"></i>{{$data['adress']}}</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="{{$data['email']}}">{{$data['email']}}</a></li>
							<li><i class="fas fa-headphones-alt" aria-hidden="true"></i>{{$data['phone']}}</li>
						@endforeach
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info">
						@foreach ($pages as $data)
                        <li><a href="{{url('page/').'/'.$data['page_name']}}">{{str_replace('_', ' ', $data['page_name'])}}</a></li>
                    @endforeach
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info">
                        @foreach ($categories as $data)
                        <li><a href="{{url('category/').'/'.$data['cat_name']}}">{{str_replace('_', ' ', $data['cat_name'])}}</a></li>
                    @endforeach
						<!-- <li><a href="sarees.html">Sarees</a></li>
						<li><a href="skirts.html">Shorts & Skirts</a></li> -->
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info">
						<!-- <li><a href="products.html">Summer Store</a></li> -->
						@if(!Session::get('user_id'))
						<li><a href="{{url('user/login')}}">Log in</a></li>
						<li><a href="{{url('user/signup')}}">Register new costumer</a></li>
					@else
						<li><a href="{{url('user/logout')}}">Log Out</a></li>
					@if(Session::get('is_admin') == true)
						<li><a href="{{url('cms/dashboard')}}">Admin Panel</a></li>
					@endif
					@endif
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>

							<li><a href="https://www.facebook.com/Knartdesign" class="facebook"> </a></li>
							<li><a href="https://www.twitter.com/" class="twitter"> </a></li>
							<li><a href="https://www.google.com/" class="google"> </a></li>
							<li><a href="https://www.pinterest.com/KNartDesing" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			{{-- <div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="" class="scroll"><img src="{{asset('images/arrow.png')}}" alt=" " class="img-responsive" /></a>
				</div>
			</div> --}}
			<div class="container">
				<p>&copy; 2019 Ponpon's All rights reserved | Design by <a href="http://KNartDesing.com/">KNartDesing</a></p>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="{{asset('mainjs/myjs.js')}}"></script>
	<script>
		var BASE_URL = "{{url('/')}}";
	</script>

	<!-- //footer -->
</body>

</html>
