<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

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
        return view('admin/home')->with('data', $data);
    }
public function form()
    {
        $data = array(
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'meta' => 'dashboard'
        );
        return view('admin/form')->with('data',$data);
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
        return view('admin/form2')->with('data',$data);
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
                'ap_edu'=>$data->input('ap_edu'),
        		'ap_ppissue_place'=>$data->input('pp_issue_place'),
                'ap_ppisue_date'=>$data->input('pp_isue_date'),
                'ap_tin'=>$data->input('tin_number'),
                'ap_period_stay'=>$data->input('stay_year').'.'.$data->input('stay_month')
            );
            $address=array(
                array(
                    'ad_type'=>'observer',
                    'present_wo'=>$data->input('present_wo'),
                    'ad_phone'=>$data->input('ov_phone'),
                    'ad_mobile'=>$data->input('ov_mobile')
                ),array(
                    'ad_type'=>'bd',
                    'present_wo'=>$data->input('contact_address'),
                    'ad_phone'=>$data->input('bd_phone'),
                    'ad_mobile'=>$data->input('ov_mobile')
                ),array(
                    'ad_type'=>'contact',
                    'present_wo'=>$data->input('permanent_address'),
                    'ad_phone'=>$data->input('contact_phone'),
                    'ad_mobile'=>$data->input('contact_mobile')
                ),array(
                    'ad_type'=>'kin',
                    'present_wo'=>$data->input('kin_contact_address'),
                    'ad_phone'=>$data->input('kin_contact_phone'),
                    'ad_mobile'=>$data->input('kin_contact_mobile')
                )
            );
            $bank=$data->input('bank');
            $irs_amount=$data->input('irs_amount');
            $ex_houre=$data->input('ex_houre');
            $brs_amount=$data->input('brs_amount');
            $relation=$data->input('relation');
            $bank=$data->input('brs_amount');

            
            $industry_name=$data->input('industry_name');
            $industry_address=$data->input('industry_address');
            $total_investment=$data->input('total_investment');
            $foreign_investment=$data->input('foreign_investment');

            $description=$data->input('description');
            $amount=$data->input('amount');
           
            $ap_meta = array(
                'yes_one'=>$data->input('yes_one'),
                'yes_two'=>$data->input('yes_two'),
                'yes_three'=>$data->input('yes_three'),
                'yes_four'=>$data->input('yes_four')
                
            );
                
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
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
