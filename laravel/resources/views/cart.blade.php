@extends('master.master')

@section('content')




<div class="breadcrumb_dress">
	<div class="container">
		<ul>
			{{-- <i class="fas fa-user"></i> --}}
			<li><a href="{{('/')}}"><span class="fas fa-home" aria-hidden="true"></span>Home</a> <i>/</i></li>
			<li>Product {{$title}}</li>
		</ul>
	</div>
</div>

<div class="container">

	<section class="row md-5">


		<!-- checkout -->
		<div class="checkout">
			<div class="container">
				<h3>Your shopping cart contains: <span>{{Cart::getTotalQuantity()}} Products</span></h3>

				<div class="checkout-right">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product</th>
								<th>Quality</th>
								<th>Product Name</th>

								<th>Price</th>
								<th>Remove</th>
							</tr>
						</thead>
						<?php $counter = 1; ?>
						@foreach($cartContent as $data)

						<tr class="rem1">
							<td class="invert">{{$counter++}}</td>
							<td class="invert-image"><a href="single.html"><img src="images/j3.jpg" alt=" " class="img-responsive" /></a></td>
							<td class="invert">
								<div class="quantity">
									<div class="quantity-select">
										<div class="entry value-plus add_to_card" id="{{$data->id}}">&nbsp;
										</div>
										<div class="entry value"><span>{{$data->quantity}}</span>
										</div>
										<div class=" entry value-minus active update_card" id="{{$data->id}}">&nbsp;</div>
									</div>
								</div>
							</td>
							<td class=" invert">{{$data->name}}
							</td>

							<td class="invert">$ {{$data->price}}</td>
							<td class="invert">
								<div class="rem">
									<div class="close1  btn-sm remove_from_card " id="{{$data->id}}"> </div>
								</div>

							</td>
						</tr>
						@endForeach


						<!--quantity-->
					</table>
				</div>
				<div class="checkout-left">
					<div class="checkout-left-basket">
						<h4>Continue to basket</h4>
						<ul>
							@foreach($cartContent as $data)
							<li>Product - <i>{{$data->name}}</i>
								<span>$ {{($data->price)*($data->quantity)}}
								</span>
							</li>
							@endForeach
						</ul>

						<ul>

							<li>
								<div>Sub total <i>-</i> <span>$ {{Cart::getSubTotal()}}</span></div>
							</li>

						</ul>
					</div>


					<div class="checkout-right-basket row col">
							<a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>

							<a href="{{url('shop/save_order')}}"><span class="glyphicon glyphicon-menu-left " aria-hidden="true"></span>Save Order</a>

					</div>









					<div class="clearfix"> </div>
				</div>
			</div>
		</div>


		<!-- //checkout -->


	</section>
</div>



@endsection
