

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
        <span>Contcts</span>
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
                        <p>Here you need to write down data for communication with the store</p>
                    </div>
                    <div id="dtOrderExample_filter" class="dataTables_filter col-md-8">

                            <button type="button" class="btn btn-lg btn-default shadow" onclick="window.location='{{url('cms/contact/contacts/create')}}'">+ Add New</button>
                    </div>
                    

                    <div class="table-responsive">
                                    <table class="table table-striped" id="mytable" >
                                        <thead>

                                            <tr role="row">
                                                <td class="table-img th-sm">Title</td>         
                                                <td class="table-img th-sm">Adress</td>  
                                                <td class="table-img th-sm">Phone</td>  
                                                <td class="table-img th-sm">Fax</td>  
                                                <td class="table-img th-sm">Email</td>                     
                                                <td class="table-img th-sm">Edit contact</td>                            
                                                <td class="table-img th-sm">Delete contact</td>                            
                                            </tr>
                                        </thead>
                                        <tbody style="text-align: left;">
                                            @foreach($contact as $data)
                                                <tr class="table-row"  >                                                 
                                                    <td class="table-text">
                                                        <h6>{{$data['title']}}</h6>
                                                    </td>
                                                    <td class="table-text">
                                                        <h6>{{$data['adress']}}</h6>
                                                    </td>
                                                    <td class="table-text">
                                                        <h6>{{$data['phone']}}</h6>
                                                    </td>
                                                    <td class="table-text">
                                                        <h6>{{$data['fax']}}</h6>
                                                    </td>                                        
                                                    <td class="table-text">
                                                        <h6>{{$data['email']}}</h6>
                                                    </td>
                                                    <td>                                               
                                                        <a id="{{$data['id']}}" href="{{url('cms/contact/contacts/'.$data['id'].'/edit')}}">
                                                            <i class="far fa-edit"></i>
                                                        </a>                                                        
                                                    </td>
                                                    <td>
                                                        <a href = "{{url('cms/contact/contacts/'.$data['id'])}}"  id="{{$data['id']}}">                     
                                                            <i class="far fa-trash-alt"></i>
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

