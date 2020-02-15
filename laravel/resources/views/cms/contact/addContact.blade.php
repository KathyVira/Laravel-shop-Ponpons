
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
        <span>Add The Contact</span>
    </h2>
</div>
<!--//banner-->
<div class="grid-form">


<!--FORM-->
<!---->
<div class="grid-form1">
    <h3>
        Add new Contact to your store
    </h3>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" enctype="multipart/form-data" action="{{url('cms/contact/contacts')}}" method="post" >
{{-- token mast --}}
                    @csrf


                        <div class="form-group">
                            <label for="smallinput" class="col-sm-2 control-label label-input-sm">
                                Title
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Title" name="title" value="{{old('title')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="smallinput" class="col-sm-2 control-label label-input-sm">
                                Adress
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Adress" name="adress" value="{{old('adress')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="smallinput" class="col-sm-2 control-label label-input-sm">
                                Phone
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1 input-sm" id="smallinput" placeholder="phone" name="phone" value="{{old('phone')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="smallinput" class="col-sm-2 control-label label-input-sm">
                                Fax
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1 input-sm" id="smallinput" placeholder="fax" name="fax" value="{{old('fax')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="smallinput" class="col-sm-2 control-label label-input-sm">
                                Email
                            </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control1 input-sm" id="smallinput" placeholder="email" name="email" value="{{old('email')}}">
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
