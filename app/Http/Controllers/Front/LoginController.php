<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\OrganizaionCat;
use App\Models\Organization;
use App\MsgApp;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session as FacadesSession;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function register()
    {
      $organizationCat = OrganizaionCat::get();
      return view('front.register',compact('organizationCat'));
    }


    public function register_save(Request $request)
    {

      
      $validator = Validator::make(
        $request->all(),
        [
          'o_name' => MsgApp::VAL_STRING,
          'o_email' => 'required|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/',
          'o_mobile' => 'required|regex:/^[6-9][0-9]{9}$/',
          'auth_name' =>MsgApp::VAL_STRING,
          'address' =>MsgApp::VAL_ADDRESS,
          'city' => MsgApp::REQ,
          'state' =>MsgApp::REQ,
          'zip' => MsgApp::VAL_PIN,
          'auth_email'=>'required|regex:/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/',
          'p_mobile'=>'required|regex:/^[6-9][0-9]{9}$/',
          'o_pan_no'=>  MsgApp::VAL_PAN,
          'gst_in'=> MsgApp::REQ,
          'aadhar'=> MsgApp::REQ,
          'pan_no'=> MsgApp::VAL_PAN,
          'upload_o_pan'=>MsgApp::REQ,
          'upload_gst_in'=>MsgApp::REQ,
          'upload_Aadhar'=> MsgApp::REQ,
          'upload_personal_pan'=> MsgApp::REQ,
        ],
        [
          'required' => ':attribute is required.',
          'unique' => ':attribute already exists.',
          'exists' => MsgApp::INVALID_MESSAGE,
          'regex' => MsgApp::INVALID_MESSAGE,
          'between' => ':attribute must be between :min to :max.',
        ],
        ['o_name' => 'Organization Name', 'o_email' => 'Organization Email', 'o_mobile' => 'Organization Mobile', 'auth_name' => 'Name',
         'password' => 'Address', 'city' => 'City' ,'state'=>'State' ,'zip'=>'zip' ,'auth_email'=>'Email','p_mobile'=>'Mobile','o_pan_no'=>'Pan Number',
         'gst_in'=>'GST In','aadhar','Aadhar Number','pan_no'=>'Pan Number','upload_o_pan'=>'Pan','upload_gst_in'=>'Gst','upload_personal_pan','Personal Pan','upload_Aadhar'=>'Aadhar']
      );
      if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }
    $upload_o_pan = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'upload_o_pan', '/documents');
    $upload_gst_in = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'upload_gst_in', '/documents');
    $upload_Aadhar = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'upload_Aadhar', '/documents');
    $upload_personal_pan = (new \App\Http\Controllers\CommonController)->uploadFile($request, 'upload_personal_pan', '/documents');
    
    Organization::saveData($request,$upload_o_pan, $upload_gst_in,$upload_Aadhar,$upload_personal_pan);
    return response()->json(['message' => 'Organization Registered Successfully'], 200);
    }


    public function login(Request $request)
    {
      if($request->has('callback')) {
        session(['callback' => $request->callback]);
      }
      return view('front.login');
    }
    public function login_post(Request $request)
    {
      if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $request->session()->regenerate();
        if(session()->has('callback')):
          $callback = session('callback');
          session()->forget('callback');
          return redirect()->route($callback);
        endif;
        return redirect()->intended('/');
      }
      return Redirect ::back()->with('failed', 'Sorry email and password does not match.')->withInput($request->all());
    }

    public function donate()
    {
      return view('payment.rezorpay');
    }

    public function logout()
    {
      FacadesSession::flush();
      Auth::logout();
      return Redirect('/');
    }
}
