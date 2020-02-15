

@extends('cms.master')

@section('content')

<!--content-->


<div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="content-main">
<!--banner-->
<div class="banner">
    <h2>
        <a href="{{('dashboard')}}">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Users</span>
    </h2>
</div>
<!--//banner-->
    <div class="content-top">
        <!--content-top-->
            <div class="grid-system">
                <div class="horz-grid">
<!-- horz-grid-->
<div class="grid-hor ">
    <h3 id="grid-example-mixed-complete">{{$title ?? ''}}</h3>
    <p>List of Users in the store.</p>
</div>

<div class="form-group col-md-4" style = "padding-left: 0px;">
    <label>
        <input type="text" class="form-control pull-right shadow"  id="search" placeholder="Search:">
    </label>
</div>



                    <div class="table-responsive">
                    <table class="table table-striped" id="mytable">

                            <thead>
                            <tr class="table-row">

                                <td class="table-text th-sm">User Name</td>
                                <td class="table-text th-sm">User Email</td>
                                <td class="table-text th-sm">User Role</td>
                                <td class="table-text th-sm">Delete User</td>
                            </tr>
                        </thead>
                        <tbody style="text-align: left;">
                        <?php $counter = 1; ?>
                        @foreach($users as $data)
                            <tr class="table-row"  >

                                <td class="table-text">
                                    <h6>{{$data['name']}}</h6>
                                </td>
                                <td class="table-text">
                                    <h6>{{$data['email']}}</h6>
                                </td>
                                <td class="table-text">
                                    <h6>{{$data['role']}}</h6>
                                </td>

                                <td>
{{-- delete --}}
                                    <a href = "{{url('cms/user/users/'.$data['id'])}}"  id="{{$data['id']}}"  >
                                        <i class="far fa-trash-alt" ></i>
                                    </a>
{{--// delete --}}
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                          <th>User Name
                          </th>
                          <th>User Email
                        </th>
                          <th>User Role
                          </th>
                          <th>Delete User
                        </th>
                        </tr>
                      </tfoot>
                <!--table-->
                </table>
                    </div>

                </div>
                <!--//table-->

                {{-- </div> --}}
            </div>
            <!--table-->



        <!-- tab content -->




        <!-- //horz-grid-->
        </div>
    </div>
                                        <!--//content-->
 </div>

@endsection

