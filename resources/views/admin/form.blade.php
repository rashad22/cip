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
    <section class="content paddingleft_right15">
    <!--page level css -->
        <link href="{{ asset('public/admin/css/pages/accordionformwizard.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/admin/vendors/wizard/acc-wizard-master/css/acc-wizard.min.css') }}" rel="stylesheet" type="text/css" />

<!--end of page level css-->
        <!--main content-->
        <div class="row">
            <div class="col-sm-12">
                    <div class="row acc-wizard">
                        <div class="col-md-2 pd-2">
                            <p class="mar-2">
                                Follow the steps below to add an accordion wizard to your web page.
                            </p>
                            <ol class="acc-wizard-sidebar">
                                <li class="acc-wizard-todo acc-wizard-active">
                                    <a href="#one">
                                        Personal Information
                                    </a>
                                </li>
                                <li class="acc-wizard-todo">
                                    <a href="#two">Present Workplace</a>
                                </li>
                                <li class="acc-wizard-todo">
                                    <a href="#three">
                                        Other's Info
                                    </a>
                                </li>
                                <li class="acc-wizard-todo">
                                    <a href="#four">remittance send</a>
                                </li>
                                <li class="acc-wizard-todo">
                                    <a href="#five">Investment in Industry</a>
                                </li>
                                <li class="acc-wizard-todo">
                                    <a href="#six">machineries and equipments</a>
                                </li>
                                <li class="acc-wizard-todo">
                                    <a href="#seven">Appropriate Box</a>
                                </li>
                                
                            </ol>
                        </div>
                        <div class="col-md-10 pd-r">
                        <form method="post" action="{{ URL::to('save') }}" class="form-horizontal">
                        {{ csrf_field() }}
                            <div id="accordion-demo" class="panel-group">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#one" data-parent="#accordion-demo" data-toggle="collapse">
                                                Personal Information
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="one" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form id="form-one" class="form-horizontal">
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ap_name">Applicant's Name</label>
                                                    <div class="col-md-8">
                                                        <input id="ap_name" name="ap_name" type="text" placeholder="Applicant's Name" value="{{ old('ap_name') }}" class="form-control">
                                                        @if ($errors->has('ap_name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ap_name') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ap_guardian">Father’s / Spouse Name</label>
                                                    <div class="col-md-8">
                                                        <input id="ap_guardian" name="ap_guardian" type="text" placeholder="Father’s / Spouse Name" class="form-control" value="{{ old('ap_guardian') }}">
                                                        @if ($errors->has('ap_guardian'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ap_guardian') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ap_mname">Mother’s Name</label>
                                                    <div class="col-md-8">
                                                        <input id="ap_mname" name="ap_mname" type="text" placeholder="Mother’s Name" class="form-control" value="{{ old('ap_guardian') }}">
                                                        @if ($errors->has('ap_guardian'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ap_guardian') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ap_nid">National ID No</label>
                                                    <div class="col-md-8">
                                                        <input id="ap_nid" name="ap_nid" type="text" placeholder="National ID No" class="form-control" value="{{ old('ap_nid') }}">
                                                        @if ($errors->has('ap_nid'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ap_nid') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ap_dateofbirth">Date of Birth</label>
                                                    <div class="col-md-8">
                                                        <input id="ap_dateofbirth" name="ap_dateofbirth" type="text" data-date-end-date="-1000d" placeholder="Date of Birth" class="form-control datepicker" value="{{ old('ap_guardian') }}">
                                                        @if ($errors->has('ap_dateofbirth'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ap_dateofbirth') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="acc-wizard-step"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel.panel-default -->

                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#two" data-parent="#accordion-demo" data-toggle="collapse">
                                                Present Workplace (Overseas)
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="two" class="panel-collapse collapse awd-h">
                                        <div class="panel-body">
                                    <form id="form-two" class="form-horizontal">
                                    <fieldset>
                                        <legend>Present Workplace</legend>
                                         <div class="form-group">
                                                <label class="col-md-3 control-label" for="ap_nid">Present Workplace (Overseas)</label>
                                                    <div class="col-md-8">
                                                        <textarea id="present_wo" name="present_wo"  placeholder="Present Workplace (Overseas)" class="form-control">{{ old('present_wo') }}</textarea>
                                                        @if ($errors->has('present_wo'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('present_wo') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ap_email">Overseas E-mail</label>
                                                    <div class="col-md-8">
                                                        <input id="ap_email" name="ap_email" type="email" placeholder="Oveseas E-mail" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ov_phone">Overseas Phone</label>
                                                    <div class="col-md-8">
                                                        <input id="ov_phone" name="ov_phone" type="text" placeholder="Overseas Phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ov_mobile">Overseas Mobile</label>
                                                    <div class="col-md-8">
                                                        <input id="ov_mobile" name="ov_mobile" type="text" placeholder="Overseas Mobile" class="form-control">
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                        <legend>Permanent Address Bangladesh</legend>
                                         <div class="form-group">
                                                <label class="col-md-3 control-label" for="permanent_address">Permanent Address BD</label>
                                                    <div class="col-md-8">
                                                        <textarea id="permanent_address" name="permanent_address"  placeholder="Permanent Address Bangladesh" class="form-control">{{ old('permanent_address') }}</textarea>
                                                        @if ($errors->has('permanent_address'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('permanent_address') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="bd_phone">BD Phone</label>
                                                    <div class="col-md-8">
                                                        <input id=bd_phone" name="bd_phone" type="text" placeholder="Bangladesh Phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="bd_mobile">BD Mobile</label>
                                                    <div class="col-md-8">
                                                        <input id="bd_mobile" name="bd_mobile" type="text" placeholder="Bangladesh Mobile" class="form-control">
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                        <legend>Contact Address Bangladesh</legend>
                                         <div class="form-group">
                                                <label class="col-md-3 control-label" for="contact_address">Contact Address BD</label>
                                                    <div class="col-md-8">
                                                        <textarea id="contact_address" name="contact_address"  placeholder="Contact Address Bangladesh" class="form-control">{{ old('contact_address') }}</textarea>
                                                        @if ($errors->has('contact_address'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('contact_address') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="contact_phone">Contact Phone</label>
                                                    <div class="col-md-8">
                                                        <input id=contact_phone" name="contact_phone" type="text" placeholder="Contact Phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="contact_mobile">Contact Mobile</label>
                                                    <div class="col-md-8">
                                                        <input id="contact_mobile" name="contact_mobile" type="text" placeholder="Contact Mobile" class="form-control">
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                        <legend>Next of Kin in Bangladesh</legend>
                                         <div class="form-group">
                                                <label class="col-md-3 control-label" for="kin_contact_address">Contact Address</label>
                                                    <div class="col-md-8">
                                                        <textarea id="kin_contact_address" name="kin_contact_address"  placeholder="Contact Address" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="kin_contact_phone">Contact Phone</label>
                                                    <div class="col-md-8">
                                                        <input id=kin_contact_phone" name="kin_contact_phone" type="text" placeholder="Contact Phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="kin_contact_mobile">Contact Mobile</label>
                                                    <div class="col-md-8">
                                                        <input id="kin_contact_mobile" name="kin_contact_mobile" type="text" placeholder="Contact Mobile" class="form-control">
                                                    </div>
                                            </div>
                                        </fieldset>
                                        <div class="acc-wizard-step"></div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel.panel-default -->
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#three" data-parent="#accordion-demo" data-toggle="collapse">
                                                Other's Info
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="three" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form id="form-three" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="edu_quality">Educational Qualification</label>
                                                    <div class="col-md-8">
                                                        <textarea id="edu_quality" name="edu_quality"  placeholder="Educational Qualification" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="pp_issue_place">Passport Issue Place</label>
                                                    <div class="col-md-8">
                                                        <input id="pp_issue_place" name="pp_issue_place" type="text" placeholder="Passport Issue Place" class="form-control" value="{{ old('pp_issue_place') }}">
                                                        @if ($errors->has('pp_issue_place'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('pp_issue_place') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="pp_isue_date">Passport Issue Date</label>
                                                    <div class="col-md-8">
                                                        <input id="pp_isue_date" name="pp_issue_date" type="text" placeholder="Passport Issue Date" class="form-control datepicker" data-date-end-date="-1d" value="{{ old('pp_isue_date') }}">
                                                        @if ($errors->has('pp_isue_date'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('pp_isue_date') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="tin_number">TIN</label>
                                                    <div class="col-md-8">
                                                        <input id="tin_number" name="tin_number" type="text" placeholder="TIN Number" class="form-control" value="{{ old('tin_number') }}">
                                                        @if ($errors->has('tin_number'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('tin_number') }}</strong>
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="stay_year">Period of Stay</label>
                                                    <div class="col-md-4">
                                                        <input id="stay_year" name="stay_year" type="text" placeholder="Year" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input id="stay_month" name="stay_month" type="text" placeholder="Month" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="acc-wizard-step"></div>
                                            </form>
                                        </div>
                                        <!--/.panel-body --> </div>
                                    <!-- /#adjusthtml --> </div>
                                <!-- /.panel.panel-default -->
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#four" data-parent="#accordion-demo" data-toggle="collapse">
                                                Details information of remittance sends FY 2014-2015
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="four" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form id="form-four" class="form-horizontal">
                                               
                                                <table id="remittance_tbl" class="table table-borderd">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Bank /Exchange (Overseas)</th>
                                                        <th>Amount (US Dollar)</th>
                                                        <th>Bank /Exchange House (Bangladesh)</th>
                                                        <th>Beneficiaries  Name & Bank Account </th>
                                                        <th>Relationship with Beneficiaries</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        <button id="add_tr" type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                                        </td>
                                                        <td>
                                                        <input id="bank" name="bank[]" type="text" placeholder="Bank /Exchange(Overseas)" class="form-control">
                                                        </td>
                                                        <td>
                                                        <input id="irs_amount" name="irs_amount" type="text" placeholder="Amount US Dollar" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input id="ex_houre" name="ex_houre[]" type="text" placeholder="Bank /Exchange Houre(Bangladesh)" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input id="irs_amount" name="irs_amount" type="text" placeholder="Amount US Dollar" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input id="relation" name="relation[]" type="text" placeholder="Relationship with Beneficiaries" class="form-control">
                                                        </td>
                                                    </tr>
                                                </table>
                                                
                                                
                                                <div class="acc-wizard-step"></div>
                                            </form>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#five" data-parent="#accordion-demo" data-toggle="collapse">
                                                Details of Investment in Industry (FY 2014-2015)
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="five" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form id="form-five" class="form-horizontal">
                                               <table id="investment_tbl" class="table table-borderd">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name of Industry</th>
                                                        <th>Address of Industry</th>
                                                        <th>Total Investment (US Dollar)</th>
                                                        <th>Invested foreign Currency (US Dollar) </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        <button id="add_tr_inv" type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                                        </td>
                                                        <td>
                                                        <input id="industry_name" name="industry_name[]" type="text" placeholder="Name of Industry" class="form-control">
                                                        </td>
                                                        <td>
                                                        <input id="industry_address" name="industry_address[]" type="text" placeholder="Address" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input id="total_investment" name="total_investment[]" type="text" placeholder="Total Insvestment" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input id="foreign_investment" name="foreign_investment[]" type="text" placeholder="Investment Foreign" class="form-control">
                                                        </td>
                                                        
                                                    </tr>
                                                </table>
                                                <div class="acc-wizard-step"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#six" data-parent="#accordion-demo" data-toggle="collapse">
                                                Description of machineries and equipments imported during (FY 2014-2015)
                                            </a>
                                        </h4>
                                    </div>
                                <div id="six" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form id="form-six" class="form-horizontal">
                                               <table id="machinery_tbl" class="table table-borderd">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Description</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                        <button id="add_tr_des" type="button" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                                        </td>
                                                        <td>
                                                        <input id="description" name="description[]" type="text" placeholder="Description" class="form-control">
                                                        </td>
                                                        <td>
                                                        <input id="amount" name="amount[]" type="text" placeholder="Amount" class="form-control">
                                                        </td>
                                                        
                                                    </tr>
                                                </table>
                                                <div class="acc-wizard-step"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#seven" data-parent="#accordion-demo" data-toggle="collapse">
                                                Please tick the Appropriate Box
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="seven" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <form id="form-seven" class="form-horizontal">
                                                <div class="form-group">
                                            <label class="col-md-6 control-label" for="yes_one">Are you currently a Loan Defaulter (Bank/Financial Institutions)?</label>
                                                    <div class="col-md-5">
                                                        <input type="checkbox" class="switch" name="my-checkbox" data-on-text='Yes' data-off-text='No' data-size="large">
                                                    </div>
                                                </div>
                                                <div class="form-group hidden">
                                                <label class="col-md-5 control-label" for="yes_one">The name of Bank/ Financial Institutions & concerned Year</label>
                                                    <div class="col-md-6">
                                                       <textarea id="yes_one" name="yes_one"  placeholder="" class="form-control"></textarea> 
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                            <label class="col-md-6 control-label" for="yes_two">Are you currently a Loan Defaulter (Bank/Financial Institutions)?</label>
                                                    <div class="col-md-5">
                                                        <input type="checkbox" class="switch" name="my-checkbox" data-on-text='Yes' data-off-text='No' data-size="large">
                                                    </div>
                                                </div>
                                                <div class="form-group hidden">
                                                <label class="col-md-5 control-label" for="yes_two">Please mention the Year</label>
                                                    <div class="col-md-6">
                                                       <textarea id="yes_two" name="yes_two"  placeholder="" class="form-control"></textarea> 
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                            <label class="col-md-6 control-label" for="yes_three">Whether Convicted under Money Laundering Prevention Act 2002?</label>
                                                    <div class="col-md-5">
                                                        <input type="checkbox" class="switch" name="my-checkbox" data-on-text='Yes' data-off-text='No' data-size="large">
                                                    </div>
                                                </div>
                                                <div class="form-group hidden">
                                                <label class="col-md-5 control-label" for="yes_three">Please mention the Year</label>
                                                    <div class="col-md-6">
                                                       <textarea id="yes_three" name="yes_three"  placeholder="" class="form-control"></textarea> 
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                            <label class="col-md-6 control-label" for="yes_four">Whether Previously Selected for CIP (NRB)?</label>
                                                    <div class="col-md-5">
                                                        <input type="checkbox" class="switch" name="my-checkbox" data-on-text='Yes' data-off-text='No' data-size="large">
                                                    </div>
                                                </div>
                                                <div class="form-group hidden">
                                                <label class="col-md-5 control-label" for="yes_four">Please mention the name of Category & Year</label>
                                                    <div class="col-md-6">
                                                       <textarea id="yes_four" name="yes_four"  placeholder="" class="form-control"></textarea> 
                                                    </div>
                                                </div>
                                                <div class="acc-wizard-step"></div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
<input type="submit" class="btn btn-success" name="submit" value="Submit">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--main content ends--> 
            <!-- begining of page level js -->
            <script src="{{ asset('public/admin/js/pages/accordionformwizard.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/admin/vendors/wizard/acc-wizard-master/js/acc-wizard.min.js') }}" type="text/javascript"></script>

<!-- end of page level js -->
<script type="text/javascript">

$('.switch').bootstrapSwitch();
$('.switch').on('switchChange.bootstrapSwitch', function(event, state) {
if(state===true){
    $(this).parent().parent().parent().parent().next().removeClass('hidden');
}else{
    $(this).parent().parent().parent().parent().next().addClass('hidden');
}
});
    $('.datepicker').datepicker();
    $('#add_tr').click(function (){
        var tr_html = $(this).parent().parent().html();
        
        $('#remittance_tbl').append('<tr class="child">'+tr_html+'</tr>');
        $('.child').find('#add_tr').remove();
        var cross_btn = '<button type="button" class="btn btn-danger cross"><i class="fa fa-times"></i></button>';
        $('.child td:first-child').html(cross_btn);
        $('.cross').click(function (){
            $(this).parent().parent().remove();
        });
    });
    $('#add_tr_inv').click(function (){
        var tr_html = $(this).parent().parent().html();
        
        $('#investment_tbl').append('<tr class="child">'+tr_html+'</tr>');
        $('.child').find('#add_tr').remove();
        var cross_btn = '<button type="button" class="btn btn-danger cross"><i class="fa fa-times"></i></button>';
        $('.child td:first-child').html(cross_btn);
        $('.cross').click(function (){
            $(this).parent().parent().remove();
        });

    });
    $('#add_tr_des').click(function (){
        var tr_html = $(this).parent().parent().html();
        
        $('#machinery_tbl').append('<tr class="child">'+tr_html+'</tr>');
        $('.child').find('#add_tr').remove();
        var cross_btn = '<button type="button" class="btn btn-danger cross"><i class="fa fa-times"></i></button>';
        $('.child td:first-child').html(cross_btn);
        $('.cross').click(function (){
            $(this).parent().parent().remove();
        });
        
    });
</script>
        </section>
</aside>
@endsection