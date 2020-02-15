

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
        <span>Category</span>
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
    <p>List of Category in the store.</p>
</div>
<div id="dtOrderExample_filter" class="dataTables_filter col-md-8">

        <button type="button" class="btn btn-lg btn-default btn_box" onclick="window.location='{{url('cms/category/categories/create')}}'">+ Add New</button>
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

                                <td class="table-text th-sm">Image</td>
                                <td class="table-text th-sm">Category Name</td>
                                <td class="table-text th-sm">Category Description</td>
                                <td class="table-text th-sm">Edit Category</td>
                                <td class="table-text th-sm">Delete Category</td>
                            </tr>
                        </thead>
                        <tbody style="text-align: left;">
                        <?php $counter = 1; ?>
                        @foreach($categories as $data)
                            <tr class="table-row"  >
                                <td class="table-img">
                                    <img src="{{asset('images').'/'.$data['image']}}"  height="42" width="42" alt="" />

                                    </td>

                                <td class="table-text">

                                    <h6>{{str_replace("_", " ", $data['cat_name'])}}</h6>
                                </td>
                                <td class="table-text">
                                    <h6>{{$data['description']}}</h6>
                                </td>

                                <td>
                                    <a id="{{$data['id']}}" href="{{url('cms/category/categories/'.$data["id"].'/edit')}}">
                                        <i class="far fa-edit" ></i>
                                    </a>
                                </td>
                                <td>
{{-- delete --}}
                                    <a href = "{{url('cms/category/categories/'.$data['id'])}}"  id="{{$data['id']}}"  >
                                        <i class="far fa-trash-alt" ></i>
                                    </a>
{{--// delete --}}
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                          <th>Image
                          </th>
                          <th>Category Name
                        </th>
                        <th>Category Description</th>
                          <th>Edit Category
                          </th>
                          <th>Delete Category
                          </th>
                        </tr>
                      </tfoot>
                <!--table-->
                </table>
                    </div>
                    <h2>
                        <div class="but_list">
                            <p>
                            <button type="button" class="btn btn-lg btn-default btn_box" onclick="window.location='{{url('cms/category/categories/create')}}'">
                                + Add New
                            </button>
                            </p>
                        </div>
                    </h2>
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

