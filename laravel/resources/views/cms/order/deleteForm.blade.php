@extends('cms.master')

@section('content')
<!--content-->
<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
<!--banner-->
<div class="banner">
    <h2>
        <a href="{{url('dashboard')}}">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Delete order</span>
    </h2>
</div>
<!--//banner-->
<div class="grid-form">

    <!--FORM-->
    <!---->
    <div class="grid-form1">
        <h3>
            Are you sure you want to detete this {{$deleteType}}?
        </h3>
        <div class="panel-body">
            <div class="tab-content">
                <div class="tab-pane active" id="horizontal-form">
                    <form class="form-horizontal" enctype="multipart/form-data" action="{{url('cms/order/orders')."/".$order['id']}}" method="post">
                        {{-- token mast --}}
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-default btn" type="submit">Delete {{$deleteType}}</button>
                                {{-- <button class="btn-default btn">Cancel</button>
                                        <button class="btn-inverse btn">Reset</button> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- tab-content --}}
        </div>
        {{-- panel-body --}}
    </div>
    {{-- grid-form1 --}}
</div>
{{-- grid-form --}}


<!--//grid-->

@endsection
