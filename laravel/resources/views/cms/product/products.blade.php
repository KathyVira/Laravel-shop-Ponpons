

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
        <span>Products</span>
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
                        <p>List of Products in the store.</p>
                    </div>
                    <div id="dtOrderExample_filter" class="dataTables_filter col-md-8">

                            <button type="button" class="btn btn-lg btn-default shadow" onclick="window.location='{{url('cms/product/products/create')}}'">+ Add New</button>
                    </div>
                    <div class="form-group col-md-4" style = "padding-left: 0px;">
                        <label>
                            <input type="text" class="form-control pull-right shadow"  id="search" placeholder="Search:">
                        </label>
                    </div>




                    <div class="table-responsive" >
                                    <table class="table table-striped " id="mytable" >
                                        <thead >

                                            <tr role="row" >
                                                <td class="table-img th-sm ">Image</td>
                                                <td class="table-text th-sm">Product Name</td>
                                                <td class="table-text th-sm">Category Name</td>
                                                <td class="table-text th-sm">Product Price</td>
                                                <td class="table-text th-sm">Edit Products</td>
                                                <td class="table-text th-sm">Delete Products</td>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: left;">
                    <?php $counter = 1; ?>
                    @foreach($products as $data)
                                            <tr class="table-row"  >
                                                <td class="table-img">
                                                <img src="{{asset('images').'/'.$data->image}}"  height="42" width="42" alt="" />

                                                </td>
                                                <td class="table-text">
                                                    <h6>{{$data->name}}</h6>
                                                </td>
                                                <td class="table-text">
                                                    <h6>{{$data->cat_name}}</h6>
                                                </td>
                                                <td class="table-text">
                                                    <h6>{{$data->price}}$</h6>
                                                </td>
                                                <td>
                                                    <a id="{{$data->id}}" href="{{url('cms/product/products/'.$data->id.'/edit')}}">
                                                        <i class="far fa-edit" ></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href = "{{url('cms/product/products/'.$data->id)}}"  id="{{$data->id}}"  >
                                                        <i class="far fa-trash-alt" ></i>
                                                    </a>
                                                </td>
                                            </tr>

                    @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                              <th>Image
                                              </th>
                                              <th>Product Name
                                              </th>
                                              <th>Category Name
                                              </th>
                                              <th>Product Price
                                              </th>
                                              <th>Edit Products
                                              </th>
                                              <th>Delete Products
                                              </th>
                                            </tr>
                                          </tfoot>
                                    <!--table-->
                                    </table>
                    </div>
                    <h2>
                        <div class="but_list">
                            <p>
                            <button type="button" class="btn btn-lg btn-default shadow" onclick="window.location='{{url('cms/product/products/create')}}'">
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

