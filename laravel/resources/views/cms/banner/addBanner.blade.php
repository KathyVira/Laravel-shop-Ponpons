
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
        <span>Add New Banner</span>
    </h2>
</div>
<!--//banner-->
<div class="grid-form">


<!--FORM-->
<!---->
<div class="grid-form1">
    <h3 id="grid-example-mixed-complete">{{$title ?? ''}}</h3>
    <span>
                            
        You can upload a JPG, GIF, or PNG file. The size of the image must be between 1140 x 100 and 1140 x 300 pixels. File size limit 5 MB.
        
    </span>

<p>By uploading this file, you certify that you have the right to distribute this image and that it is not pornographic.
</p>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" enctype="multipart/form-data" action="{{url('cms/banner/banners')}}" method="post" >
{{-- token mast --}}
                    @csrf


                        <div class="form-group">
                            <label for="smallinput" class="col-sm-2 control-label label-input-sm">
                                Banner URL
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1 input-sm" id="smallinput" placeholder="source" name="source" value="{{old('source')}}">
                            </div>
                        </div>
                       


                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-default btn" type="submit">Submit</button>
                              {{-- <button class="btn-default btn">Cancel</button>
                                <button class="btn-inverse btn">Reset</button> --}}
                            </div>
                        </div>
                   </form>
               </div>
           </div>









    </div>
    </div>
</div>



   <!--//grid-->

@endsection
