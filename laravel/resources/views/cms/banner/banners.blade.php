

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
        <span>Banner</span>
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
                        <span>

                            You can upload a JPG, GIF, or PNG file. The size of the image must be between 512 x 512 and 1024 x 1024 pixels. File size limit 5 MB.

                        </span>

                    <p>By uploading this file, you certify that you have the right to distribute this image and that it is not pornographic.
                    </p>
                </p>


                    </div>
                    <div id="dtOrderExample_filter" class="dataTables_filter col-md-8">

                            <button type="button" class="btn btn-lg btn-default shadow" onclick="window.location='{{url('cms/banner/banners/create')}}'">+ Add New</button>
                    </div>


                    <div class="table-responsive">
                                    <table class="table table-striped" id="mytable" >
                                        <thead>

                                            <tr role="row">
                                                <td class="table-img th-sm ">Image</td>
                                                <td class="table-img th-sm">Banner sourse</td>
                                                <td class="table-img th-sm">Edit sourse</td>
                                                <td class="table-img th-sm">Delete sourse</td>
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: left;">
                                            @foreach($banner as $data)
                                                <tr class="table-row"  >
                                                    <td class="table-img">
                                                        <img src="{{$data['source']}}"  height="42" width="150" alt="" />

                                                    <td class="table-text">
                                                    <h6>{{$data['source']}}</h6>
                                                    </td>
                                                    <td>
                                                        <a id="{{$data['id']}}" href="{{url('cms/banner/banners/'.$data['id'].'/edit')}}">
                                                            <i class="far fa-edit" ></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href = "{{url('cms/banner/banners/'.$data['id'])}}"  id="{{$data['id']}}">
                                                            <i class="far fa-trash-alt" ></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
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

