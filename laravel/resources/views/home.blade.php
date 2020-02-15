

@extends('master.master')

@section('content')


<div class="breadcrumb_dress">
    <div class="container">
        <ul>
            <li><a href="#"><span aria-hidden="true"><i class="fas fa-home"></i></span>Home</a> <i>/</i></li>
            <li> {{$title}}</li>
        </ul>
    </div>
</div>
	<div class="special-deals">

        <div class="container">

            <div class="row ">




				@foreach ($categories as $data)
					<div class="col-md-4 agileinfo_new_products_grid w3agile_special_deals_grid_left_grid">
						<img src="{{asset('images').'/'.$data['image']}}" alt=" " class="img-responsive" style="height: 350px; width: 350px"/>

						<div class="w3agile_special_deals_grid_left_grid_pos">
							<h4 style= "color: black">{{str_replace('_', ' ', $data['cat_name'])}}</h4>
							<div class="simpleCart_shelfItem ">
							<p>{{$data['description']}}</p>
							<p>  </p>
							<p><a class="item_add" href="{{url('category/').'/'.$data['cat_name']}}">More</a></p>
							</div>
						</div>
					</div>
				@endforeach


						<script src="{{asset('js/jquery.wmuSlider.js')}}"></script>
						<script>
							$('.example1').wmuSlider();
						</script>
				</div>
			<div class="clearfix"> </div>
		</div>
	</div> <!-- //special-deals -->



@endsection

