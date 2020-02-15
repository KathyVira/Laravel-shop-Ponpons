
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
        <span>Add New Page</span>
    </h2>
</div>
<!--//banner-->
<div class="grid-form">


<!--FORM-->
<!---->
<div class="grid-form1">
    <h3>
        Add new Page to your store
    </h3>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" enctype="multipart/form-data" action="{{url('cms/page/pages')}}" method="post" >
{{-- token mast --}}
                    @csrf

                        <div class="form-group">
                            <label for="smallinput" class="col-sm-2 control-label label-input-sm">
                                Page Name
                            </label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Page name" name="page_name" value="{{old('name')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="smallinput" class="col-sm-2 control-label label-input-sm">
                                Main Title
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Main Title" name="title_main" value="{{old('price')}}">
                            </div>
                        </div>

                        <div class="form-group">
                           <label for="txtarea" class="col-sm-2 control-label"  >
                            Page Text
                            </label>
                           <div class="col-sm-8">
                               <textarea name="text_main" id="txtarea1" cols="50" rows="4" class="form-control1" placeholder="Page Text" value="{{old('description')}}">

                               </textarea>
                            </div>
                        </div>                       

                        <div class="form-group">
                            <label for="inputFile" class="col-md-2 control-label">
                              Left Image 350/350px
                            </label>
                            <div class="col-md-8">
                                <div class="input-group input-icon right">
                                    <input type="file"  name="image">
                                </div>
                            </div>
                                <div class="col-sm-2">
                                    <p class="help-block">jpeg, png, bmp, gif, svg, or webp</p>
                                </div>
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
