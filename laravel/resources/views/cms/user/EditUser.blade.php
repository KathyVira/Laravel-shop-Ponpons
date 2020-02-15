
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
        <span>Edit User</span>
    </h2>
</div>
<!--//banner-->
<div class="grid-form">


<!--FORM-->
<!---->
<div class="grid-form1">
    <h3>
        Edit Your User
    </h3>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane active" id="horizontal-form">
                <form class="form-horizontal" enctype="multipart/form-data" action="{{url('cms/user/users')."/".$user['id']}}" method="post" >
{{-- token mast --}}
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="requestType" value="update">
                        <div class="form-group">
                            <label for="smallinput" class="col-sm-2 control-label label-input-sm">
                                User Name
                            </label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control1 input-sm" id="smallinput" placeholder="User name" name="name" value="{{$user['name']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="smallinput" class="col-sm-2 control-label label-input-sm">
                                User Email
                            </label>
                            <div class="col-sm-8">
                            <input type="text" class="form-control1 input-sm" id="smallinput" placeholder="User email" name="email" value="{{$user['email']}}">
                            </div>
                        </div>

                        <div class="form-group">
                           <label for="text" class="col-sm-2 control-label">
                            User role
                            </label>
                           <div class="col-sm-8">
                            <select>

                                <option name="role" value="7">
                                    Administrator
                                </option>
                                <option name="role" value="5">
                                    Customer
                                 </option>
                            </select>
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
