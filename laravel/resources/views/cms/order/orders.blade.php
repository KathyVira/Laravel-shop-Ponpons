

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
        <span>Orders</span>
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

                    <div class="form-group col-md-4" style = "padding-left: 0px;">
                        <label>
                            <input type="text" class="form-control pull-right shadow"  id="search" placeholder="Search:">
                        </label>
                    </div>




                    <div class="table-responsive ">
                                    <table class="table table-striped" id="mytable" >
                                        <thead>

                                            <tr role="row">
                                                <td>#</td>
                                                <td class="table-img th-sm ">Orders</td>
                                                <td class="table-img th-sm ">Total Price</td>
                                                <td class="table-text th-sm">Cosrumer name</td>
                                                <td class="table-text th-sm">Cosrumer email</td>

                                                <td class="table-text th-sm">Delete Order</td>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: left;">
                    <?php $counter = 1; ?>
                    @foreach($orders as $data)
                                            <tr class="table-row"  >
                                                <td><?php echo  $counter++ ?></td>
                                                <td class="table-text">
                                                    <table>
                                                        <tr>
                                                           <td>Product</td>
                                                            <td>Each Price</td>
                                                            <td>Each Amount</td>
                                                            {{-- <td>Edit Product</td>
                                                            <td>Delete Product </td> --}}
                                                        </tr>

                                                       
                                                        @foreach((json_decode($data->content, true)) as $oneOrder)
                                                                <tr>

                                                                    <td>{{$oneOrder['name']}}</td>
                                                                    <td>$ {{$oneOrder['price']}} </td>
                                                                    <td>{{$oneOrder['quantity']}}</td>
                                                                    {{-- <td>
                                                                        <a id="{{$data->id}}" href="{{url('/'.$data->id.'/edit')}}">
                                                                            <i class="far fa-edit" ></i>
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        <a href = "{{url('/'.$data->id)}}"  id="{{$data->id}}"  >
                                                                            <i class="far fa-trash-alt" ></i>
                                                                        </a>
                                                                    </td> --}}
                                                                </tr>
                                                        @endforeach
                                                    </table>
                                                </td>
                                                <td class="table-text">
                                                    <h6>$ {{$data->subtotal}}</h6>
                                                </td>
                                                <td class="table-text">

                                                    <h6><?php echo $data->name ?> </h6>

                                                </td>
                                                <td class="table-text">

                                                    <h6><?php echo $data->email ?> </h6>

                                                </td>
                                                <td>
                                                    <a href = "{{url('cms/order/orders/'.$data->id)}}"  id="{{$data->id}}">
                                                        <i class="far fa-trash-alt" ></i>
                                                    </a>
                                                </td>
                                            </tr>
                    @endforeach
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                              <th>#
                                              </th>
                                              <th>Order
                                              </th>
                                              <th>Total Price
                                              </th>
                                              <th>Costumer Name
                                              </th>
                                              <th>Costumer Email
                                              </th>
                                              <th>Delete Order
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

