@extends('admin.master')

@section('content')
<aside class="right-side strech">

    <section class="content-header">
        <h1>Blank page</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Pages</li>
            <li class="active">Blank page</li>
        </ol>
    </section>
    <section class="content">

                   <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                 Applicant List
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--main content-->
                                <div class="row">
                    
                                    <div class="col-md-12">
                                    <table class="table">
                                        <tr>
                                            <th>#</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Guardian Name</th>
                                            <th>E-mail</th>
                                            <th>TIN</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach($ap_list as $key=>$single_ap)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$single_ap->ap_name}}</td>
                                            <td>{{$single_ap->ap_name}}</td>
                                            <td>{{$single_ap->ap_guardian}}</td>
                                            <td>{{$single_ap->ap_email}}</td>
                                            <td>{{$single_ap->ap_tin}}</td>
                                            <td><a href="{{url('applicant_details/'.$single_ap->ap_id)}}" class="btn btn-success">Details</a> </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>

</aside>
@endsection