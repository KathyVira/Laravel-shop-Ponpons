

@extends('master.master')

@section('content')


<div class="breadcrumb_dress">
    <div class="container">
        <ul>


            <li><a href="{{('/')}}"><span aria-hidden="true"><i class="fas fa-home"></i></span>Home</a> <i>/</i></li>
		<li>{{str_replace("_", " " , $page_name)}}</li>
        </ul>
    </div>
</div>
<div class="special-deals">
<h2>{{$title_main}}</h2>
<div class="about">
	<div class="container">	
		<div class="w3ls_about_grids">
			<div class="col-md-6 w3ls_about_grid_left">
				
				<div class="col-xs-10 w3ls_about_grid_left2">
					<p>{{$text_main}}</p>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 w3ls_about_grid_right">
				<img style="" class="page_img" src="{{asset('images').'/'.$image}}" alt=" " class="img-responsive" />
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
</div>
<!-- //about -->



@endsection

