<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use Session;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Message\Topics;
use FCM; 
class CustomerController extends Controller
{     
    public function index()
    { 

        $customers = Customer::orderBy('id', 'desc')->paginate(10); 
        return view('customers.index')->withcustomers($customers);
    }
  
    public function create()
    {
        $customer = Customer::all();  
        return view('customers.create')->withcustomer($customer);
    }

     public function store(Request $request)
    {
        // Save a new Comment and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255' , 
            'tel' => 'required|max:255'  ,   
            'city'  => 'required|max:255' , 
            'pass'  => 'required|max:255'  
            ));

        $customer = new Customer; 
        
        $name = $customer->name = $request->name ;
        $tel = $customer->tel = $request->tel ;
        $city = $customer->city = $request->city ;
        $pass = $customer->pass = $request->pass ;   
        $customer->save(); 
           
        $id =   $customer->id ; 
        
        Session::flash('success', 'تم اضافة  ');
        
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'type' => 'Customers',
            'id' => $id, 
            'name' => $name , 
            'tel' => $tel ,   
            'city' => $city  ,
            'pass' => $pass    
        ]);
        
        $data = $dataBuilder->build();
        
        
        $topic = new Topics();
        $topic->topic('wiqaia');
        
        $topicResponse = FCM::sendToTopic($topic, null, null , $data );
        
        $result = $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error(); 
            
        return redirect()->route('customers.show',$customer->id);
    }
     
    public function show($id)
    { 

        $customer = Customer::find($id);
        return view('customers.show')->withcustomer($customer);
    }

    public function edit($id)
    {
        $customer = Customer::find($id); 
        return view('customers.edit')->withcustomer($customer);
    }
 
    public function update(Request $request, $id)
    { 
        $customer = Customer::find($id);

        if ($request->input('name') == $customer->name) {
            $this->validate($request, array( 
                'name'         => 'required' 
            ));
        } else {
        $this->validate($request, array(  
            ));
        }

        $customer = Customer::find($id);
 
        $name = $customer->name = $request->input('name');    
        $tel = $customer->tel = $request->input('tel');    
        $pass =  $customer->pass = $request->input('pass');    
        $city  = $customer->city = $request->input('city');      
  
        $customer->save(); 
        
        Session::flash('success', 'تم التعديل ');
 
        return redirect()->route('customers.show', $customer->id);
    }
 
    public function destroy($id)
    {
    
        $customer = Customer::find($id); 

        $customer->delete();

        Session::flash('success', 'تم الحذف');
        
               
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'type' => 'dCustomers',
            'id' => $id 
        ]);
        
        $data = $dataBuilder->build();
        
        
        $topic = new Topics();
        $topic->topic('wiqaia');
        
        $topicResponse = FCM::sendToTopic($topic, null, null , $data );
        
        $result = $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error(); 
        
        return redirect()->route('customers.index');
    }
    
}  
