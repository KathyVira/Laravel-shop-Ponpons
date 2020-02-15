
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>{{$title}} | Admin </title>
{{-- MB Table --}}
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->

{{--// MB Table --}}

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="n" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('css/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/css/font-awesome.css')}}" rel="stylesheet">
<script src="{{asset('js/js/jquery.min.js')}}"> </script>
<!-- Mainly scripts -->
<script src="{{asset('js/js/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/js/jquery.slimscroll.min.js')}}"></script>
<!-- Custom and plugin javascript -->
<link href="{{asset('css/css/custom.css')}}" rel="stylesheet">
<link href="{{asset('css/my.css')}}" rel="stylesheet">
<!-- font awesome -->
<script src="https://kit.fontawesome.com/f7c313ecd4.js" crossorigin="anonymous"></script>

<script src="{{asset('js/js/custom.js')}}"></script>
<script src="{{asset('mainjs/myjs.js')}}"></script>
<script src="{{asset('js/js/screenfull.js')}}"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});

		});
		</script>

<!----->

<!--pie-chart--->
<script src="{{asset('js/js/pie-chart.js')}}" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
{{-- MB Table --}}
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->

{{-- //MB Table --}}



<div id="wrapper">
    <nav class="navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
            </button>
            <h1> <a class="navbar-brand" href="index.html">Minimal</a></h1>
		</div>
		<div class=" border-bottom">
        	<div class="full-left">
        	    <section class="full-top">
                    <button id="toggle"><i class="fa fa-arrows-alt"></i></button>
                    <div class="navbar-right">@include('partials.flash')</div>
			    </section>
            </div>
            <div class="clearfix"></div>
        </div>	
		<div class="clearfix">
    

	    <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav master-left" id="side-menu">


                    <li>
                        <a href="{{url('/')}}" class=" hvr-bounce-to-right  master-left">
                            <i class="fas fa-home nav_icon "></i>
                            <span class="nav-label">Main Shop</span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{url('cms/dashboard')}}" class=" hvr-bounce-to-right  master-left">
                            <i class="fa fa-dashboard nav_icon "></i>
                            <span class="nav-label">Dashboards</span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{url('cms/category/categories')}}" class=" hvr-bounce-to-right master-left">
                            <i class="fa fa-th-list nav_icon "></i> 
                            <span class="nav-label">Categories</span> 
                        </a>
                   </li>
                   <li>
                        <a href="{{url('cms/order/orders')}}" class=" hvr-bounce-to-right master-left">
                            <i class="fa fa-cart-arrow-down nav_icon "></i>
                            <span class="nav-label">Orders</span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{url('cms/user/users')}}" class=" hvr-bounce-to-right">
                            <i class="fa fa-users nav_icon "></i> 
                            <span class="nav-label">Users</span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{url('cms/product/products')}}" class=" hvr-bounce-to-right">
                            <i class="fas fa-carrot nav_icon"></i> 
                            <span class="nav-label">Products</span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{url('cms/page/pages')}}" class=" hvr-bounce-to-right">
                            <i class="fas fa-scroll  nav_icon"></i> 
                            <span class="nav-label">Pages</span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{url('cms/banner/banners')}}" class=" hvr-bounce-to-right">
                            <i class="fas fa-puzzle-piece nav_icon"></i> 
                            <span class="nav-label">Advertising</span> 
                        </a>
                    </li>
                    <li>
                        <a href="{{url('cms/contact/contacts')}}" class=" hvr-bounce-to-right">
                            <i class="far fa-address-book nav_icon"></i> 
                            <span class="nav-label">Contacts</span> 
                        </a>
                    </li>
                </ul>
            </div>
	    </div>
    </nav>
     


        @yield('content')



		<!--content-->
    <div class="copy">
        <p> &copy; 2016 Minimal. All Rights Reserved | Design by 
            <a href="http://w3layouts.com/" target="_blank">W3layouts</a> 
        </p>
	</div>
</div>
<div class="clearfix"> </div>
      
<!---->
<!--scrolling js-->
<script src="{{asset('mainjs/dashboard.js')}}"></script>
	<script src="{{asset('js/js/jquery.nicescroll.js')}}"></script>
	<script src="{{asset('js/js/scripts.js')}}"></script>
	<!--//scrolling js-->
    <script src="{{asset('js/js/bootstrap.min.js')}}"> </script>
    <script src="{{asset('mainjs/myjs.js')}}"></script>
</body>
</html>

