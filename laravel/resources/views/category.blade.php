@extends('master.master')

@section('content')
{{-- new holder attacts --}}
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{asset('js/newjs/simpleCart.min.js')}}"></script>
<script src="{{asset('js/newj/jquery.easing.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/newcss/jquery-ui.css')}}">
<link href="{{asset('css/newcss/style.css')}}" rel="stylesheet" type="text/css"
<link rel="stylesheet" type="text/css" href="{{asset('css/newcss/jquery-ui.css-style')}}">

{{-- new holder attacts --}}
<div class="breadcrumb_dress">
	<div class="container">
		<ul>

            
			<li><a href="#"><span class="fas fa-home aria-hidden="true"></span>Home</a> <i>/</i></li>
			<li>Category {{str_replace('_', ' ', $title)}}</li>
		</ul>
	</div>
</div>

<div class="ponpons">
	<div class="container">
		<div class=" row ">

		<!-- <div class="w3agile_special_deals_grid_left_grid"> -->

{{-- new plase product --}}


                @foreach($products['data'] as $data)
                    <div class=" col-md-3 product-men no-pad-men ">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item" >
                                <img src="{{asset('images').'/'.$data['image']}}" alt="" class="pro-image-front">
                                <img src="{{asset('images').'/'.$data['image']}}" alt="" class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                        <a onclick="window.location='{{url('product').'/'.$data['id']}}'" class="link-product-add-cart">{{$data['name']}}</a>
                                        </div>
                                    </div>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="{{url('product').'/'.$data['id']}}">{{$data['name']}}</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">${{$data['price']}}</span>

                                </div>
                                <a  class="item_add single-item hvr-outline-out button2 add_to_card"  id="{{$data['id']}}">Add to cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            <div class="clearfix"> </div>
            {{$objProducts->links()}}
        </div>
	</div>
</div>
    <div class="breadcrumb_dress">
        <div class="container">
                <div class="simpleCart_shelfItem">

                    <p><a class="item_add" onclick="window.location='{{url('shop/GoToCart')}}'">Go to cart</a></p>
                    <p><a class="item_add" onclick="window.location='{{url('/')}}'">Back</a></p>
                </div>
        </div>
    </div>






	@endsection
