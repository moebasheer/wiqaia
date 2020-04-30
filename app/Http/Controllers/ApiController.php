<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

use App\Doctor;
use App\Customer;
use App\Post;
use App\Order; 
use App\Notice; 
use Validator; 
use DB;
use Response;  

use GuzzleHttp\Client;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Message\Topics;
use FCM; 

class ApiController extends Controller
{   
    public function userstore(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255' ,
            'tel' => 'required|max:255'  ,   
            'city'  => 'required|max:255' , 
            'pass'  => 'required|max:255'  
            )); 
            
        $vcode = rand(1000,9999);
        
        $customer = new Customer;
     
        $customer->name = $request->name;
        $tel = $customer->tel = $request->tel; 
        $customer->city = $request->city;
        $customer->pass = $request->pass;    
        $customer->token = $request->token;    
        $customer->code = $vcode ;
        $customer->save();   
        
        $id = $customer->id ; 
        $customer = Customer::find($id);
     
        $tel = '249'.$tel;
            

        $client = new Client();
        $res = $client->request('POST', "http://mazinhost.com/smsv1/sms/api?action=send-sms&api_key=cXlxcmpNTGREZ05oZHNNYXFNZG8=&to=".$tel."&from=wigaia&sms=".$vcode); 
        
        return response()->json(compact('customer')); 
        
    }
    
    public function userlogin(Request $request )
    {
        $this->validate($request, array(
            'token' => 'required|max:255' ,
            'tel' => 'required|max:255' , 
            'pass' => 'required|max:255' , 
            ));
  
        $tel = $request->tel;
        $token = $request->token ;
        $pass = $request->pass ;
        $customer = Customer::orderBy('id', 'desc')->where('tel' , $tel)->first();         
        $p = $customer->pass ;
        $t = $customer->token ;
        $te = $request->tel;
         
        if($pass == $p) {  
        $message = "Login successful";
        return response()->json(compact('customer'));  }
        
        /*else  {
        $message =  "Error" ;
        return Response::json(compact('message'));  
        }  */

    }
    
    public function userver(Request $request )
    {
        $this->validate($request, array(
            'code' => 'required|max:255' ,
            'tel' => 'required|max:255' ,  
            ));
  
        $t = $request->tel;
        $tel = '249'.$t;

        $token = $request->token ;
        $code = $request->code ;
        $customer = Customer::where('tel' , $tel)->first();         
        $vcode = $customer->code ;
         
        if($code == $vcode) {   
        $tok = DB::update('update customers set token = ? where tel = ?',[$token,$t]);
        $message = "تم التاكد من  رقم التحقق" ;
        return Response::json($customer); }
 
        /*else {  
        $message =  "الرقم الذي ادخلته غير صحيح" ;
        return Response::json(compact('message'));  
        } */

    }
 
    public function cstore(Request $request)
    {
        $this->validate($request, array( 
            'name' => 'required|max:255' ,
            'tel' => 'required|max:255' ,
            'city' => 'required|max:255' , 
            'pass' => 'required|max:255'   
            ));
                

        $customer = new Customer;
 
        $customer->name = $request->name; 
        $customer->tel = $request->tel; 
        $customer->city = $request->city; 
        $customer->pass = $request->pass; 
        $customer->token = $request->token; 
         
        $customer->save();
        
       $token = $customer->token ; 

        
        return response()->json(compact('customer'));
    }
    
     public function AddNewUser(Request $request)
    {
        $this->validate($request, array( 
            'name' => 'required|max:255' ,
            'tel' => 'required|max:255' ,
            'city' => 'required|max:255' , 
            'pass' => 'required|max:255'   
            ));
                

        $customer = new Customer;
 
        $customer->name = $request->name; 
        $customer->tel = $request->tel; 
        $customer->city = $request->city; 
        $customer->pass = $request->pass; 
        $vcode= rand(00000,999999);
        $tel = $request->tel;
        $tel = '249'.$tel; 
         
        $customer->save();
        
        $msg=  $this->sendmessage( $tel, $vcode);
       

        
        return response()->json(compact('customer'));
    }

    public function dstore(Request $request)
    {
        $this->validate($request, array( 
            'name' => 'required|max:255' ,
            'tel' => 'required|max:255' , 
            'job' => 'required|max:255'  ,
            'city' => 'required|max:255' 
            ));
        $doctor = new Doctor;
        $doctor->name = $request->name; 
        $doctor->tel = $request->tel; 
        $doctor->job = $request->job;
        $doctor->national = $request->national; 
        $doctor->city = $request->city; 
        $doctor->address = $request->address; 
        $doctor->token = $request->token; 
         
        $doctor->save();
        
        $token = $doctor->token ; 
        
        return response()->json(compact('doctor'));
    }

    public function login(Request $request )
    {
        $this->validate($request, array(
            'tel' => 'required|max:255' ,
            'pass' => 'required|max:255' , 
            ));
 
        $tel = $request->tel; 
        $pass = $request->pass ;
        $tel = Customer::where('tel' , $tel)->first();         
        $p = $tel->pass ;
        if($pass == $p) {  
        $message = "تم تسجيل الدخول" ;
        return Response::json($tel); 
        }
    }
    
    public function  ostore(Request $request)
    {
        $this->validate($request, array(
            'user_id' => 'required|max:255' , 
            ));
        $order = new Order;
        $user_id = $order->user_id = $request->user_id;  
        $cnum = $order->cnum = $request->cnum;  
        $job = $order->job  = $request->job  ; 
        $jadd = $order->jadd  = $request->jadd  ; 
        $card = $order->card  = $request->card  ; 
        $conum = $order->conum  = $request->conum  ; 
        $purpose = $order->purpose = $request->purpose;  
        $track = $order->track = $request->track;  
        $sdate = $order->sdate = $request->sdate;  
        $edate = $order->edate = $request->edate;  
        $status = $order->status = 1;  
        $order->save();
        return response()->json(compact('order'));
    }
    
    public function nstore(Request $request)
    {
        $this->validate($request, array( 
            'name' => 'required|max:255' ,
            'tel' => 'required|max:255' ,  
            'city' => 'required|max:255' 
            ));
                

        $notice = new Notice;
 
        $notice->name = $request->name; 
        $notice->tel = $request->tel;  
        $notice->city = $request->city; 
        $notice->address = $request->address; 
        $notice->body = $request->body;  
         
        $notice->save();
        
        return response()->json(compact('notice'));
    }

  
        
}
