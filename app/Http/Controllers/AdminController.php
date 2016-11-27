<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
class AdminController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data = array(
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'meta' => 'dashboard'
        );
        $data['ap_list'] = DB::table('applicant_info')->get();
        return view('admin.view_ap')->with($data);
    }
public function form()
    {
        $data = array(
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'meta' => 'dashboard'
        );
        return view('admin/form')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $data = array(
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'meta' => 'dashboard'
        );
        return view('admin/form2')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data) {
        //

        $v = \Validator::make($data->all(), [
                    'ap_name' => 'required|max:100',
                    'ap_guardian' => 'required|max:255',
                    'ap_mname' => 'required',
                    'ap_nid' => 'required',
                    'ap_dateofbirth' => 'required',
                    'present_wo' => 'required',
                    'ap_email' => 'required|email',
                    'ov_phone' => 'required',
                    'permanent_address' => 'required',
                    'bd_phone' => 'required',
                    'contact_address' => 'required',
                    'contact_phone' => 'required',
                    'kin_contact_address' => 'required',
                    'kin_contact_phone' => 'required',
                    'pp_issue_place' => 'required',
                    'pp_isue_date' => 'required',
                    'tin_number' => 'required',
                    'stay_year' => 'required',
        ]);
        if ($v->fails()) {
            return redirect()->back()->withErrors($v->errors());
        } else {
        	$applicant_info = array(
        		'ap_name'=>$data->input('ap_name'),
        		'ap_guardian'=>$data->input('ap_guardian'),
        		'ap_mothername'=>$data->input('ap_mname'),
        		'ap_nid'=>$data->input('ap_nid'),
        		'ap_dateofbirth'=>$data->input('ap_dateofbirth'),
                'ap_email'=>$data->input('ap_email'),
                'ap_edu'=>$data->input('edu_quality'),
        		'ap_ppissue_place'=>$data->input('pp_issue_place'),
                'ap_ppissue_date'=>$data->input('pp_isue_date'),
                'ap_tin'=>$data->input('tin_number'),
                'ap_period_stay'=>$data->input('stay_year').'.'.$data->input('stay_month'),
                'created_at' => date('Y-m-d h:i:s'),
                'token' => $data->input('_token'),
            );
            $bank=$data->input('bank');
            $irs_amount=$data->input('irs_amount');
            $ex_houre=$data->input('ex_houre');
            $brs_amount=$data->input('brs_amount');
            $relation=$data->input('relation');
            $bank_arr = array();
            for($i=0;$i<sizeof($bank);$i++){
                $a = array($bank[$i],$irs_amount[$i],$ex_houre[$i],$brs_amount[$i],$relation[$i],'remittance');
                array_push($bank_arr,$a);
            }
            
            $industry_name=$data->input('industry_name');
            $industry_address=$data->input('industry_address');
            $total_investment=$data->input('total_investment');
            $foreign_investment=$data->input('foreign_investment');

            $industry_arr = array();
            for($i=0;$i<sizeof($industry_name);$i++){
                $a = array($industry_name[$i],$industry_address[$i],$total_investment[$i],$foreign_investment[$i],'investment');
                array_push($industry_arr,$a);
            }

            $description=$data->input('description');
            $amount=$data->input('amount');
           
            $description_arr = array();
            for($i=0;$i<sizeof($description);$i++){
                $a = array($description[$i],$amount[$i],'equipments_imported');
                array_push($description_arr,$a);
            }

            $yes_one = ($data->input('one_check'))?$data->input('yes_one'):'';    
            $yes_two=($data->input('two_check'))?$data->input('yes_two'):'';    
            $yes_three = ($data->input('three_check'))?$data->input('yes_three'):'';    
            $yes_four = ($data->input('four_check'))?$data->input('yes_four'):'';   

            $ap_insert = DB::table('applicant_info')->insertGetId($applicant_info);
            $address=array(
                array(
                    'ad_type'=>'observer',
                    'ad_name'=>'Present Workplace (Overseas)',
                    'ad_address'=>$data->input('present_wo'),
                    'ad_phone'=>$data->input('ov_phone'),
                    'ad_mobile'=>$data->input('ov_mobile'),
                    'created_at' => date('Y-m-d h:i:s')
                ),array(
                    'ad_name'=>'Permanent Address Bangladesh',
                    'ad_type'=>'bd',
                    'ad_address'=>$data->input('contact_address'),
                    'ad_phone'=>$data->input('bd_phone'),
                    'created_at' => date('Y-m-d h:i:s'),
                    'ad_mobile'=>$data->input('ov_mobile')
                ),array(
                    'ad_name'=>'Contact Address Bangladesh',
                    'ad_type'=>'contact',
                    'ad_address'=>$data->input('permanent_address'),
                    'ad_phone'=>$data->input('contact_phone'),
                    'created_at' => date('Y-m-d h:i:s'),
                    'ad_mobile'=>$data->input('contact_mobile')
                ),array(
                    'ad_name'=>'Kin Contact Address',
                    'ad_type'=>'kin',
                    'ad_address'=>$data->input('kin_contact_address'),
                    'ad_phone'=>$data->input('kin_contact_phone'),
                    'created_at' => date('Y-m-d h:i:s'),
                    'ad_mobile'=>$data->input('kin_contact_mobile')
                )
            );

            
            if($ap_insert){
                $ap_id = array('ap_id'=>$ap_insert);
                foreach($address as $add){
                    $add = $add+$ap_id;
                    DB::table('applicant_address')->insert($add);
                }
                $meta_arr = array(
                array(
                    'ap_id'=>$ap_insert,
                    'meta_key'=>'remittance',
                    'meta_value'=>serialize($bank_arr)
                ),
                array(
                    'ap_id'=>$ap_insert,
                    'meta_key'=>'investment',
                    'meta_value'=>serialize($industry_arr)
                ),
                array(
                    'ap_id'=>$ap_insert,
                    'meta_key'=>'equipments_imported',
                    'meta_value'=>serialize($description_arr)
                ),
                array(
                    'ap_id'=>$ap_insert,
                    'meta_key'=>'yes_one',
                    'meta_value'=>$yes_one
                ),
                array(
                    'ap_id'=>$ap_insert,
                    'meta_key'=>'yes_two',
                    'meta_value'=>$yes_two
                ),
                array(
                    'ap_id'=>$ap_insert,
                    'meta_key'=>'yes_three',
                    'meta_value'=>$yes_three
                ),array(
                    'ap_id'=>$ap_insert,
                    'meta_key'=>'yes_four',
                    'meta_value'=>$yes_four
                ),
            );
                foreach($meta_arr as $single_arr){
                    $single_arr = $single_arr;
                    DB::table('applicant_meta')->insert($single_arr);
                }
            }
             
                
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $data = array(
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'meta' => 'dashboard'
        );
        $data['ap_details'] = DB::table('applicant_info')->where('ap_id',$id)->first();
        $data['ap_address'] = DB::table('applicant_address')->where('ap_id',$id)->get();
       $remittance = DB::table('applicant_meta')->where(array('ap_id'=>$id,'meta_key'=>'remittance'))->first();
       if($remittance){
            $data['ap_remittance'] = unserialize($remittance->meta_value);
       }
       $investment = DB::table('applicant_meta')->where(array('ap_id'=>$id,'meta_key'=>'investment'))->first();
       if($investment){
            $data['ap_investment'] = unserialize($investment->meta_value);
       }
       $equipments_imported = DB::table('applicant_meta')->where(array('ap_id'=>$id,'meta_key'=>'equipments_imported'))->first();
       if($equipments_imported){
            $data['equipments_imported'] = unserialize($equipments_imported->meta_value);
       }
        return view('admin.ap_details')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
