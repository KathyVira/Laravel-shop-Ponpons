@extends('master.master')

@section('content')




<div class="breadcrumb_dress">
	<div class="container">
		<ul>

			<li><a href="{{('/')}}"><span class="fas fa-home" aria-hidden="true"></span>Home</a> <i>/</i></li>
			<li>Product {{$title}}</li>

		</ul>
	</div>
</div>



<div class="special-deals">

    <div class="container">

        <div class="row ">


	<section class="row md-5">
		<div class="modal-body">
			<div class="col-md-5 modal_body_left">
				<img src="{{asset('images').'/'.$product['image']}}" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-7 modal_body_right">
				<h4>{{$product['name']}}</h4>
				<p>{{$product['description']}}</p>

				<div class="modal_body_right_cart simpleCart_shelfItem">
					<p> <i class="item_price">${{$product['price']}}</i></p>

					<p><a class="add_to_card" id="{{$product['id']}}">Add to cart</a></p>


					<p><a class="item_add" onclick="window.location='{{url('shop/GoToCart')}}'">Go to cart</a></p>

					<p><a class="item_add" onclick="window.location='{{url('category').'/'.$category['cat_name']}}'">Back</a></p>
				</div>


			</div>
			<div class="clearfix"> </div>
		</div>

	</section>
</div>



@endsection
