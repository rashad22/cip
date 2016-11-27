@extends('admin.master')

@section('content')
<aside class="right-side strech">

     <link href="{{ asset('public/admin/vendors/wizard/jquery-steps/css/jquery.steps.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('public/admin/vendors/wizard/jquery-steps/css/wizard.css') }}" rel="stylesheet" type="text/css" />
     <style type="text/css">
	.wizard-inline > .content{
		
		overflow: auto;
	}
	.wizard-inline > .steps > ul > li{
		width: auto;
	}
</style>
<section class="content">
                <div class="row">
                   <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="user-add" data-size="18" data-c="#fff" data-hc="#fff" data-loop="true"></i>
                                 Add New User
                                </h3>
                                <span class="pull-right clickable">
                                    <i class="glyphicon glyphicon-chevron-up"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <!--main content-->
                                <div class="row">
                    
                                <div class="col-md-12">
                                  
                                    <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                    <form class="form-wizard" action="{{ URL::to('save') }}" method="POST">
                                    {{ csrf_field() }}
                                        <h1>Personal Info</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="form-group">
                                                <label for="ap_name">Applicant's Name *</label>
                                                <input id="ap_name" name="ap_name" type="text" placeholder="Applicant's Name" value="{{ old('ap_name') }}" class="form-control required">
                                                        @if ($errors->has('ap_name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ap_name') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="ap_name">Father’s / Spouse Name *</label>
                                                <input id="ap_guardian" name="ap_guardian" type="text" placeholder="Father’s / Spouse Name" class="form-control required" value="{{ old('ap_guardian') }}">
                                                        @if ($errors->has('ap_guardian'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ap_guardian') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="ap_mname">Mother’s Name *</label>
                                                <input id="ap_mname" name="ap_mname" type="text" placeholder="Mother’s Name" class="form-control required" value="{{ old('ap_guardian') }}">
                                                        @if ($errors->has('ap_mname'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ap_mname') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="ap_nid">National ID No *</label>
                                                <input id="ap_nid" name="ap_nid" type="text" placeholder="National ID No" class="form-control required" value="{{ old('ap_nid') }}">
                                                        @if ($errors->has('ap_nid'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ap_nid') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="ap_dateofbirth">Date of Birth *</label>
                                                <input id="ap_dateofbirth" name="ap_dateofbirth" type="text" data-date-end-date="-1000d" data-date-format='yyyy-mm-dd' placeholder="Date of Birth" class="form-control datepicker required" value="{{ old('ap_guardian') }}">
                                                        @if ($errors->has('ap_dateofbirth'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ap_dateofbirth') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>

                                            
                                            <p>(*) Mandatory</p>
                                        </section>
                                        <h1>Present Workplace</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <fieldset>
                                            	<legend>Present Workplace (Overseas)</legend>
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                <div class="form-group">
                                                <label for="present_wo">Present Workplace (Overseas) *</label>
                                                <textarea id="present_wo" name="present_wo"  placeholder="Present Workplace (Overseas)" class="form-control required">{{ old('present_wo') }}</textarea>
                                                        @if ($errors->has('present_wo'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('present_wo') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>
                                                </div>
                                                <div class="col-sm-6">
                                                <div class="form-group">
                                                <label for="ap_email">Overseas E-mail *</label>
                                                <input id="ap_email" name="ap_email" type="email" placeholder="Oveseas E-mail" class="form-control required">
                                            </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="ov_phone">Overseas Phone *</label>
                                                        <input id="ov_phone" name="ov_phone" type="text" placeholder="Overseas Phone" class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                        <label for="ov_mobile">Overseas Mobile</label>
                                                        <input id="ov_mobile" name="ov_mobile" type="text" placeholder="Overseas Mobile" class="form-control">
                                                    </div> 
                                                </div>
                                            </div>
                                            </fieldset>
                                            <fieldset>
                                            	<legend>Permanent Address Bangladesh</legend>
                                            
                                            <div class="row">
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                <label for="permanent_address">Permanent Address BD *</label>
                                                <textarea id="permanent_address" name="permanent_address"  placeholder="Permanent Address BD" class="form-control required">{{ old('permanent_address') }}</textarea>
                                                        @if ($errors->has('permanent_address'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('permanent_address') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>
                                               </div>
                                                
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="bd_phone">BD Phone *</label>
                                                        <input id="bd_phone" name="bd_phone" type="text" placeholder="BD Phone" class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                        <label for="bd_mobile">BD Mobile</label>
                                                        <input id="ov_mobile" name="bd_mobile" type="text" placeholder="BD Mobile" class="form-control">
                                                    </div> 
                                                </div>
                                            </div>
                                            </fieldset>
                                            <fieldset>
                                            	<legend>Contact Address Bangladesh</legend>
                                            
                                            <div class="row">
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                <label for="contact_address">Contact Address Bangladesh *</label>
                                                <textarea id="contact_address" name="contact_address"  placeholder="Contact Address Bangladesh" class="form-control required">{{ old('contact_address') }}</textarea>
                                                        @if ($errors->has('contact_address'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('contact_address') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>
                                            </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="contact_phone">Contact Phone *</label>
                                                        <input id="contact_phone" name="contact_phone" type="text" placeholder="Contact Phone" class="form-control required">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                        <label for="contact_mobile">Contact Mobile</label>
                                                        <input id="contact_mobile" name="contact_mobile" type="text" placeholder="Contact Mobile" class="form-control">
                                                    </div> 
                                                </div>
                                            </div>
                                            </fieldset>
                                            <fieldset>
                                            	<legend>Kin Contact Address</legend>
                                            
                                            <div class="row">
                                                <div class="col-sm-12">
                                                <div class="form-group">
                                                <label for="kin_contact_address">Contact Address *</label>
                                                <textarea id="kin_contact_address" name="kin_contact_address"  placeholder="Contact Address" class="form-control required">{{ old('kin_contact_address') }}</textarea>
                                                        @if ($errors->has('kin_contact_address'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('kin_contact_address') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>
                                            </div>
                                           </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="kin_contact_phone">Contact Phone *</label>
                                                        <input id="kin_contact_phone" name="kin_contact_phone" type="text" placeholder="Contact Phone required" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <div class="form-group">
                                                        <label for="kin_contact_mobile">Contact Mobile</label>
                                                        <input id="kin_contact_mobile" name="kin_contact_mobile" type="text" placeholder="Contact Mobile" class="form-control">
                                                    </div> 
                                                </div>
                                            </div>
                                            </fieldset>
                                            <p>(*) Mandatory</p>
                                        </section>
                                        <h1>Other's Info</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="row">
                                                 <div class="col-sm-12">
                                                <div class="form-group">
                                                <label for="edu_quality">Educational Qualification</label>
                                                <textarea id="edu_quality" name="edu_quality"  placeholder="Educational Qualification" class="form-control">{{ old('edu_quality') }}</textarea>
                                                        @if ($errors->has('edu_quality'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('edu_quality') }}</strong>
                                                        </span>
                                                        @endif
                                               
                                            </div>
                                            </div>
                                                
                                            </div>
                                            <div class="row">
                                            	<div class="col-sm-6">
                                            		<div class="form-group">
                                                <label for="pp_issue_place">Passport Issue Place *</label>
                                                <input id="pp_issue_place" name="pp_issue_place" type="text" placeholder="Passport Issue Place" class="form-control required" value="{{ old('pp_issue_place') }}">
                                                @if ($errors->has('pp_issue_place'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('pp_issue_place') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>
                                            	</div>
                                            	<div class="col-sm-6">
                                            		<div class="form-group">
                                                <label for="pp_isue_date">Passport Issue Date *</label>
                                                <input id="pp_isue_date" data-date-format='yyyy-mm-dd' name="pp_isue_date" type="text" placeholder="Passport Issue Date" class="form-control required datepicker" value="{{ old('pp_isue_date') }}">
                                                @if ($errors->has('pp_isue_date'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('pp_isue_date') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>
                                            	</div>
                                            </div>
                                            <div class="row">
                                            	<div class="col-sm-12">
                                             <div class="form-group">
                                                <label for="tin_number">TIN *</label>
                                                <input id="tin_number" name="tin_number" type="text" placeholder="TIN" class="form-control " value="{{ old('tin_number') }}">
                                                @if ($errors->has('tin_number'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('tin_number') }}</strong>
                                                        </span>
                                                        @endif
                                            </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            	<div class="col-sm-6">
                                            		<div class="form-group">
                                            			<label for="stay_year">Period of Stay Year*</label>
                                                <input id="stay_year" name="stay_year" type="text" placeholder="Year" class="form-control required" value="{{ old('stay_year') }}">
                                            		</div>		
                                            	</div>
                                            	<div class="col-sm-6">
                                            		<div class="form-group">
                                            			<label for="stay_month">Period of Stay Month*</label>
                                                <input id="stay_month" name="stay_month" type="text" placeholder="Month" class="form-control required" value="{{ old('stay_month') }}">
                                            		</div>		
                                            	</div>
                                            	</div>
                                            
                                            <p>(*) Mandatory</p>
                                        </section>
                                        <h1> Remittance sends</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="row">
                                                 <div class="col-sm-12">
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
                                                        <input id="irs_amount" name="irs_amount[]" type="text" placeholder="Amount US Dollar" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input id="ex_houre" name="ex_houre[]" type="text" placeholder="Bank /Exchange Houre(Bangladesh)" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input id="brs_amount" name="brs_amount[]" type="text" placeholder="Amount US Dollar" class="form-control">
                                                        </td>
                                                        <td>
                                                            <input id="relation" name="relation[]" type="text" placeholder="Relationship with Beneficiaries" class="form-control">
                                                        </td>
                                                    </tr>
                                                </table>
                                                
                                            </div>
                                            
                                            	</div>
                                            
                                            <p>(*) Mandatory</p>
                                        </section>
                                        <h1> Investment in Industry</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="row">
                                                 <div class="col-sm-12">
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
                                                
                                            </div>
                                            
                                            	</div>
                                            
                                            <p>(*) Mandatory</p>
                                        </section>
                                        
                                        <h1> Machineries and Equipments</h1>
                                        <section>
                                            <h2 class="hidden">&nbsp;</h2>
                                            <div class="row">
                                                 <div class="col-sm-12">
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
                                                
                                            </div>
                                            
                                            	</div>
                                            
                                            <p>(*) Mandatory</p>
                                        </section>
                                        <h1>Appropriate Box</h1>

                                        <section>
                                        <div class="form-group">
                                            <label>Are you currently a Loan Defaulter (Bank/Financial Institutions)?</label>
                                            <input type="checkbox" class="switch" name="one_check" data-on-text='Yes' data-off-text='No' data-size="large">
                                        </div>
                                        <div class="row hidden">
                                        <div class="col-sm-5">
                                        <div class="form-group">
                                        	<label>The name of Bank/ Financial Institutions & concerned Year</label>
                                        	</div>
                                        </div>
                                        <div class="col-sm-7">
                                        <div class="form-group">
                                        	 <textarea id="yes_one" name="yes_one"  placeholder="" class="form-control"></textarea>
                                        	 </div>
                                        </div>
                                       </div>
                                       <div class="form-group">
                                            <label>Are you currently a Loan Defaulter (Bank/Financial Institutions)?</label>
                                            <input type="checkbox" class="switch" name="two_check" data-on-text='Yes' data-off-text='No' data-size="large">
                                        </div>
                                        <div class="row hidden">
                                        <div class="col-sm-5">
                                        <div class="form-group">
                                        	<label>Please mention the Year</label>
                                        	</div>
                                        </div>
                                        <div class="col-sm-7">
                                        <div class="form-group">
                                        	 <textarea id="yes_two" name="yes_two"  placeholder="" class="form-control"></textarea> 
                                        	 </div>
                                        </div>
                                       </div>
                                       <div class="form-group">
                                            <label>Whether Convicted under Money Laundering Prevention Act 2002?</label>
                                            <input type="checkbox" class="switch" name="three_check" data-on-text='Yes' data-off-text='No' data-size="large">
                                        </div>
                                        <div class="row hidden">
                                        <div class="col-sm-5">
                                        <div class="form-group">
                                        	<label>Please mention the Year</label>
                                        	</div>
                                        </div>
                                        <div class="col-sm-7">
                                        <div class="form-group">
                                        	 <textarea id="yes_three" name="yes_three"  placeholder="" class="form-control"></textarea> 
                                        	 </div>
                                        </div>
                                       </div>
                                           <div class="form-group">
                                            <label>Whether Previously Selected for CIP (NRB)?</label>
                                            <input type="checkbox" class="switch" name="four_check" data-on-text='Yes' data-off-text='No' data-size="large">
                                        </div>
                                        <div class="row hidden">
                                        <div class="col-sm-5">
                                        <div class="form-group">
                                        	<label>Please mention the name of Category & Year</label>
                                        	</div>
                                        </div>
                                        <div class="col-sm-7">
                                        <div class="form-group">
                                        	 <textarea id="yes_four" name="yes_four"  placeholder="" class="form-control"></textarea>  
                                        	 </div>
                                        </div>
                                       </div>
                                       
                                            <h2 class="hidden">&nbsp;</h2>
                                            <span>Terms and Conditions</span>
                                            <div class="pos-rel p-l-30">
                                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="pos-rel p-l-30 ">
                                                <label for="acceptTerms"> I agree with the Terms and Conditions.</label>
                                            </div>
                                        </section>
                                    </form>
                                    <!-- END FORM WIZARD WITH VALIDATION -->
                                </div>
                                </div>
                                <!--main content end-->
                            </div>
                        </div>
                    </div>
                </div>

                <!--row end-->

            </section>
    <script src="{{ asset('public/admin/vendors/wizard/jquery-steps/js/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/vendors/wizard/jquery-steps/js/form_wizard.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/vendors/wizard/jquery-steps/js/jquery.steps.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/admin/vendors/wizard/jquery-steps/js/wizard.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function (){
    	
  
$('.switch').bootstrapSwitch();
$('.switch').on('switchChange.bootstrapSwitch', function(event, state) {
if(state===true){
    $(this).parent().parent().parent().next().removeClass('hidden');
}else{
    $(this).parent().parent().parent().next().addClass('hidden');
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
      });
</script>
            </aside>
@endsection