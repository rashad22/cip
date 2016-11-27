@extends('admin.master')

@section('content')
<aside class="right-side strech">

    <section class="content-header">
        <h1>Applicant Details</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">Applicant Details</li>
        </ol>
    </section>
    <section class="content">

                   <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                 Applicant Details
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--main content-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="col-sm-3">Applicant's Name : </label>
                                                <p>{{$ap_details->ap_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="col-sm-3">Guardin's Name : </label>
                                                <p>{{$ap_details->ap_guardian}}</p>
                                            </div>    
                                        </div>    
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="col-sm-3">Mother's Name : </label>
                                                <p>{{$ap_details->ap_guardian}}</p>
                                            </div>    
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="col-sm-3">Date of Birth : </label>
                                                <p>{{$ap_details->ap_dateofbirth}}</p>
                                            </div>    
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="col-sm-3">National ID : </label>
                                                <p>{{$ap_details->  ap_nid}}</p>
                                            </div>    
                                        </div> 
                                         
                                        @foreach($ap_address as $address)
                                        <fieldset>
                                            <legend>
                                                {{$address->ad_name}}
                                            </legend>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="col-sm-3">{{$address->ad_name}} : </label>
                                                <p>{{$address->ad_address}}</p>
                                            </div>    
                                        </div>    
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="col-sm-6">Phone : </label>
                                                <p>{{$address->ad_phone}}</p>
                                            </div>  
                                            <div class="col-md-6">
                                                <label class="col-sm-6">Mobile : </label>
                                                <p>{{$address->ad_mobile}}</p>
                                            </div>   
                                        </div>
                                        </fieldset>
                                        @endforeach 
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="col-sm-6">Passport No : </label>
                                                <p>{{$ap_details->ap_passport_no}}</p>
                                            </div>  
                                            <div class="col-md-4">
                                                <label class="col-sm-6">Passport Issue Place : </label>
                                                <p>{{$ap_details->ap_ppissue_place}}</p>
                                            </div> 
                                            <div class="col-md-4">
                                                <label class="col-sm-6">Passport Issue Date : </label>
                                                <p>{{$ap_details->ap_ppissue_date}}</p>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="col-sm-3">Educational Qualification : </label>
                                                <p>{{$ap_details->ap_edu}}</p>
                                            </div>    
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="col-sm-3">TIN : </label>
                                                <p>{{$ap_details->ap_tin}}</p>
                                            </div>    
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label class="col-sm-3">Period of Stay : </label>
                                                <p>{{$ap_details->ap_period_stay}}</p>
                                            </div>    
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label>Details information of remittance sends FY 2014-2015</label>
                                                <table class="table">
                                                    <tr>
                                                        <th>Bank /Exchange (Overseas)</th>
                                                        <th>Amount (US Dollar)</th>
                                                        <th>Bank /Exchange House (Bangladesh)</th>
                                                        <th>Beneficiaries Name & Bank Account</th>
                                                        <th>Relationship with Beneficiaries</th>
                                                    </tr>
                                                    @foreach($ap_remittance as $item)
                                                    <tr>
                                                        <td>{{$item[0]}}</td>
                                                        <td>{{$item[1]}}</td>
                                                        <td>{{$item[2]}}</td>
                                                        <td>{{$item[3]}}</td>
                                                        <td>{{$item[4]}}</td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>    
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label>Details of Investment in Industry (FY 2014-2015)</label>
                                                <table class="table">
                                                    <tr>
                                                        <th>Name of Industry</th>
                                                        <th>Address of Industry</th>
                                                        <th>Total Investment (US Dollar)</th>
                                                        <th>Invested foreign Currency (US Dollar)</th>
                                                    </tr>
                                                    @foreach($ap_investment as $item)
                                                    <tr>
                                                        <td>{{$item[0]}}</td>
                                                        <td>{{$item[1]}}</td>
                                                        <td>{{$item[2]}}</td>
                                                        <td>{{$item[3]}}</td>
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>    
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <label>Description of machineries and equipments imported during (FY 2014-2015)</label>
                                                <table class="table">
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>Amount</th>
                                                       
                                                    </tr>
                                                    @foreach($equipments_imported as $item)
                                                    <tr>
                                                        <td>{{$item[0]}}</td>
                                                        <td>{{$item[1]}}</td>
                                                        
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>

</aside>
@endsection