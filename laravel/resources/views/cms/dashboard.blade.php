

@extends('cms.master')

@section('content')


<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
<!--banner-->
<div class="banner">
    <h2>
        <a href="{{('/')}}">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Dashboard</span>
    </h2>
</div>
            <!--//banner-->
<div class="content-top">
<!--content-->
    <div class="grid-system">
        <div class="horz-grid">
            <div class="grid-hor">
                <h3 id="grid-example-mixed-complete">Admin Panel</h3>
                <p>Store control panel<p>
            </div>
        {{-- </div> --}}
   
 <!--//content-->

{{-- body --}}

<!---->


<div class="content-mid">


<!----->
    <div class="content-bottom">
        <div class="col-md-4 post-top">
            <div class="post-bottom">
                <div class="btn btn-lg btn-default shadow admin" style="box-shadow: 0 5px 15px rgba(0,0,0,.5); ">
                    <a href="{{url('/')}}">
                    <p><i class="fas fa-home nav_icon "></i> <label>Main Shop</label></p>
                    </a>
                </div>                       
            </div>
        </div>
        <div class="col-md-4 post-top">
            <div class="post-bottom">                
                <div class="btn btn-lg btn-default shadow admin">
                    <a href="{{url('cms/category/categories')}}">
                    <p><i class="fa fa-th-list nav_icon "></i> <label>Categories</label></p>
                    </a>
                </div>                        
            </div>
        </div>

        <div class="col-md-4 post-top">
            <div class="post-bottom">
                <div class="btn btn-lg btn-default shadow admin">
                    <a href="{{url('cms/product/products')}}">
                    <p><i class="fas fa-carrot nav_icon"></i> <label>Products</label></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 post-top">
            <div class="post-bottom">
                <div class="btn btn-lg btn-default shadow admin">
                    <a href="{{url('cms/order/orders')}}">
                    <p><i class="fa fa-cart-arrow-down nav_icon "></i> <label>Orders</label></p>
                    </a>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 post-top">
            <div class="post-bottom">
                <div class="btn btn-lg btn-default shadow admin">
                    <a href="{{url('cms/user/users')}}">
                    <p><i class="fa fa-users nav_icon "></i> <label>Users</label></p></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 post-top">
            <div class="post-bottom">
                <div class="btn btn-lg btn-default shadow admin">
                    <a href="{{url('cms/page/pages')}}">
                    <p><i class="fas fa-scroll  nav_icon"></i> <label>Pages</label></p></a>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 post-top">
            <div class="post-bottom">
                <div class="btn btn-lg btn-default shadow admin">
                    <a href="{{url('cms/banner/banners')}}">
                    <p><i class="fas fa-puzzle-piece  nav_icon"></i> <label>Advertising</label></p></a>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 post-top">
            <div class="post-bottom">
                <div class="btn btn-lg btn-default shadow admin">
                    <a href="{{url('cms/contact/contacts')}}">
                    <p><i class="far fa-address-book  nav_icon"></i> <label>Contacts</label></p></a>
                </div>
                
            </div>
        </div>

    <div class="clearfix"> </div>
</div>
</div>
</div>
</div></div>

<!--//content-->
{{-- //body/ --}}
@endsection

