<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Customer;
use Session;
use Carbon\Carbon;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use GuzzleHttp\Client;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Message\Topics;
use FCM; 

class OrderController extends Controller
{     
    public function index()
    { 
        $orders = Order::orderBy('id', 'desc')->paginate(10); 
        return view('orders.index')->withorders($orders);
    }
    
    public function create()
    {
        $order = Order::all();  
        return view('orders.create')->withorder($order);
    }

    public function store(Request $request)
    { 
        $this->validate($request, array(
            'user_id' => 'int'  
            ));

        $order = new Order;

        $user_id = $order->user_id  = $request->user_id  ; 
        $cnum = $order->cnum  = $request->cnum  ; 
        $job = $order->job  = $request->job  ; 
        $jadd = $order->jadd  = $request->jadd  ; 
        $card = $order->card  = $request->card  ; 
        $conum = $order->conum  = $request->conum  ; 
        $purpose = $order->purpose  = $request->purpose  ; 
        $track = $order->track  = $request->track  ; 
        $sdate = $order->sdate  = $request->sdate  ; 
        $edate = $order->edate  = $request->edate  ;   
        
        $order->save(); 
        
        $id =   $order->id ;
        $status =   $order->status ;
        
        Session::flash('success', 'تم اضافة الطلب');
        
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'type' => 'Orders',
            'id' => $id, 
            'user_id' => $user_id, 
            'cnum' => $cnum  ,   
            'job' => $job  ,   
            'jadd' => $jadd  ,   
            'card' => $card  ,   
            'conum' => $conum  ,   
            'purpose' => $purpose  ,   
            'track' => $track  ,   
            'sdate' => $sdate  ,   
            'status' => $status   
        ]);
        
        $data = $dataBuilder->build();
        
        
        $topic = new Topics();
        $topic->topic('wiqaia');
        
        $topicResponse = FCM::sendToTopic($topic, null, null , $data );
        
        $result = $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error(); 
        
        
        return redirect()->route('orders.show',$order->id);
    }
 
 
    public function show($id)
    { 
        $order = Order::find($id);
        return view('orders.show')->withorder($order);
    }
    public function edit($id)
    {
        $order = Order::find($id); 
        return view('orders.edit')->withorder($order);
    }

    public function update(Request $request, $id)
    { 
        $order = Order::find($id);

        if ($request->input('user_id') == $order->user_id) {
            $this->validate($request, array( 
                'user_id'         => 'required' 
            ));
        } else {
        $this->validate($request, array(  
            ));
        }

        $order = Order::find($id);
 
        $order->cnum = $request->input('cnum');   
        $order->job = $request->input('job');    
        $order->jadd = $request->input('jadd');    
        $order->card = $request->input('card');    
        $order->conum = $request->input('conum');    
        $order->purpose = $request->input('purpose');    
        $order->track = $request->input('track'); 
        $order->status = $request->input('status'); 
        $order->sdate = $request->input('sdate'); 
        $status=$order->edate = $request->input('edate');
        if ($status==='1' ) {$message = "تم استلام الطلب";} 
        elseif ($status==='2' ) {$message = "الطلب قيد الاجراء";} 
        elseif ($status==='3' ) {$message = " تم الغاء الطلب ";} 
        elseif ($status==='4' ) {$message = " تم تنفيذ الطلب ";} 
        
        //send message to notify the customer
        $customer = Customer::find($order->user_id);
        
        $telephone="249".$customer->tel;
        
        if($request->input('status')==4){
        
        $name=Carbon::now()->format("Ymd")+$id;
        $url="http://wiqaia.org/qrcodes/".$name.".png";
        
        QrCode::format('png')
        ->backgroundColor(255, 255, 204)
        ->size(250)
        //Generate qrcode including  phone number and the name of file is the id "$id" save with png in views/qrcodes
        ->generate($name,'../qrcodes/'.$name.'.png');
            $order->barcode = $url;
           $message=" تم اعتماد تصديق الطواريء الخاص بك  ";
        $client = new Client();
        $res = $client->request('POST', "http://mazinhost.com/smsv1/sms/api?action=send-sms&api_key=cXlxcmpNTGREZ05oZHNNYXFNZG8=&to=".$telephone."&from=wigaia&sms=".$message);
        
        } 
        else if ($request->input('status')==3)
        {
            $message=" نعتذر , تم الغاءطلب تصريح الطواريءالخاص بك ";
            $client = new Client();
            $res = $client->request('POST', "http://mazinhost.com/smsv1/sms/api?action=send-sms&api_key=cXlxcmpNTGREZ05oZHNNYXFNZG8=&to=".$telephone."&from=wigaia&sms=".$message);
            
        }
        $order->save();  
        
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'type' => 'UOrders', 
            'message' => $message
        ]);
        
        $data = $dataBuilder->build();
        
        
        $topic = new Topics();
        $topic->topic('wiqaia');
        
        $topicResponse = FCM::sendToTopic($topic, null, null , $data );
        
        $result = $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error(); 
                               
        Session::flash('success', 'تم التعديل ');
 
        return redirect()->route('orders.show', $order->id);
    }
   
    public function destroy($id)
    {
    
        $order = Order::find($id); 

        $order->delete();

        Session::flash('success', 'تم الحذف');     
        
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'type' => 'dOrders',
            'id' => $id 
        ]);
        
        $data = $dataBuilder->build();
        
        
        $topic = new Topics();
        $topic->topic('wiqaia');
        
        $topicResponse = FCM::sendToTopic($topic, null, null , $data );
        
        $result = $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error(); 
        
        return redirect()->route('orders.index');
    }
    
}   


