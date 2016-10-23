@extends('admin.master')

@section('content')
<aside class="right-side">
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
                        <div class="col-md-3 pd-2">
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
                                    <a href="#six">Appropriate Box</a>
                                </li>
                                
                            </ol>
                        </div>
                        <div class="col-md-9 pd-r">
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
                                                        <input id="ap_name" name="ap_name" type="text" placeholder="Applicant's Name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ap_guardian">Father’s / Spouse Name</label>
                                                    <div class="col-md-8">
                                                        <input id="ap_guardian" name="ap_guardian" type="text" placeholder="Father’s / Spouse Name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ap_mname">Mother’s Name</label>
                                                    <div class="col-md-8">
                                                        <input id="ap_mname" name="ap_mname" type="text" placeholder="Mother’s Name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ap_nid">National ID No</label>
                                                    <div class="col-md-8">
                                                        <input id="ap_nid" name="ap_nid" type="text" placeholder="National ID No" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="ap_dateofbirth">Date of Birth</label>
                                                    <div class="col-md-8">
                                                        <input id="ap_dateofbirth" name="ap_dateofbirth" type="text" data-date-end-date="-1000d" placeholder="Date of Birth" class="form-control datepicker">
                                                    </div>
                                                </div>
                                                <div class="acc-wizard-step"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.panel.panel-default -->

                                <div class="panel panel-info">
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
                                                        <textarea id="present_wo" name="present_wo"  placeholder="Present Workplace (Overseas)" class="form-control"></textarea>
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
                                                        <textarea id="permanent_address" name="permanent_address"  placeholder="Permanent Address Bangladesh" class="form-control"></textarea>
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
                                                        <textarea id="contact_address" name="contact_address"  placeholder="Contact Address Bangladesh" class="form-control"></textarea>
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
                                <div class="panel panel-warning">
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
                                                        <input id="pp_issue_place" name="pp_issue_place" type="text" placeholder="Passport Issue Place" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="pp_isue_date">Passport Issue Date</label>
                                                    <div class="col-md-8">
                                                        <input id="pp_isue_date" name="pp_issue_date" type="text" placeholder="Passport Issue Date" class="form-control datepicker" data-date-end-date="-1d">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                <label class="col-md-3 control-label" for="tin_number">TIN</label>
                                                    <div class="col-md-8">
                                                        <input id="tin_number" name="tin_number" type="text" placeholder="TIN Number" class="form-control">
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
                                <div class="panel panel-danger">
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
                                                <h2>Fourth ac</h2>
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
                                                <h2>First ac</h2>
                                                <div class="acc-wizard-step"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="#six" data-parent="#accordion-demo" data-toggle="collapse">
                                                Please tick the Appropriate Box
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="six" class="panel-collapse collapse" style="height: 36.400001525878906px;">
                                        <div class="panel-body">
                                            <form id="form-six" class="form-horizontal">
                                                <h2>Fourth ac</h2>
                                                <div class="acc-wizard-step"></div>
                                            </form>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
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
    $('.datepicker').datepicker();
</script>
        </section>
</aside>
@endsection