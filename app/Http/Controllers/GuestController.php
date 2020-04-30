<?php
namespace App\Http\Controllers;
use App\Customer;
use App\Doctor;
use App\User;
use App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Session;
use GuzzleHttp\Client;
use App\Order;


use Illuminate\Http\Request;



class GuestController extends CustomerController
{

     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $customer;


    public function index()
    {
        //

            return view('guests.index');
    }
    public function edit($id)
    {
        
         
        $id = (int)$id;
        $customers  =Customer::all();
        //echo 'this si customers '.$customers;
        $newc =new Customer();
        foreach( $customers  as  $customer)
        {
            if($customer->id==$id)
            $newc=$customer;
        }  
                $customer=$newc;
        
        return view('guests.edit')->withcustomer($customer);
    }
    public function log(Request $request)
    {
        //
        $this->validate($request, array(
            'tel' => 'required|max:10' ,
            'pass'  => 'required|max:255'  
            ));
            $tel=$request->tel;
            $pass=$request->pass;
        $customers  =Customer::all();
        //echo 'this si customers '.$customers;
        $loging =new Customer();
        foreach( $customers  as  $customer)
        {
            if(($customer->tel==$tel) && ($customer->pass==$pass))
            {
            $loging=$customer;
            return view('guests.profile')->withcustomer($loging);
            }
        }  
        
            return redirect()->back() ->with('alert', 'فشل تسجيل الدخول!');
    }
    public function show($id)
    {   
        $id = (int)$id;
        $customers  =Customer::all();
        //echo 'this si customers '.$customers;
        $newc =new Customer();
        foreach( $customers  as  $customer)
        {
            if($customer->id==$id)
            $newc=$customer;
        }  
                $customer=$newc;
        
        return view('guests.show')->withcustomer($customer);
    }
    
   

    
    public function regdoc(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255' ,
            'tel' => 'required|max:10'  ,   
            'job'  => 'required|max:255' , 
            'national'  => 'required|max:12'  
            ));
            $doctor =new Doctor();
            $name = $doctor->name = $request->name ;
            $tel = $doctor->tel = $request->tel ;
            $national = $doctor->national = $request->input('national');  
            $job = $doctor->job = $request->job ;
            $city = $doctor->city = $request->city ;
            $address = $doctor->address = $request->address ;
        $client = new Client();
        $res = $client->request('POST', "http://wiqaia.org/public/api/dreg?name=".$name."&tel=".$tel."&national=".$national."&job=".$job."&city=".$city."&address=".$address); 
        if(($res->getStatusCode())==200){

            return redirect()->back() ->with('alert', 'تم التسجيل بنجاح!');

        }

    }

        // {"type":"User"...'
        
        // Save a new Comment and then redirect back to index
        /*$this->validate($request, array(
            'name' => 'required|max:255' , 
            'tel' => 'required|max:10'  ,   
            'city'  => 'required|max:255' , 
            'pass'  => 'required|max:255'  
            ));

        $mail=(String)$request->tel.'@wiqaia.com';
        $user=new User();
        $name = $user->name = $request->name ;
        $email = $user->email =$mail ;
        $role = $user->role = '2' ;
        $password = $user->password = Hash::make($request->pass) ;   
        $user->save(); 
        $uid=$user->id;
        $customer = new Customer; 
        
        $name = $customer->name = $name ;
        $user_id = $customer->user_id = $uid ;
        $tel = $customer->tel = $request->tel ;
        $city = $customer->city = $request->city ;
        $pass = $customer->pass = $password ;   
        $customer->save(); 
           
        $id =   $customer->id ; 
        
        Session::flash('success', 'تم اضافة  ');
        
        
        return view('home');

}*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Display the specified resource.
     *
     * @param  \App\guest  $guest
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request, array(
            'name' => 'required|max:40' ,
            'tel' => 'required|max:10'  ,   
            'city'  => 'required|max:255' , 
            'pass'  => 'required|max:2500'  
            ));
        $name = $request->name;
        $tel = $request->tel;
        $city = $request->city;
        $pass =$request->pass;   
        $client = new Client();
        $res = $client->request('POST', "http://wiqaia.org/public/api/reg?name=".$name."&tel=".$tel."&city=".$city."&pass=".$pass); 
        if(($res->getStatusCode())==200){
            
             return redirect()->back() ->with('alert', 'تم التسجيل بنجاح!');
        }
         return redirect()->back() ->with('alert', ' فشل عملية التسجيل الرجاء ادخال بيانات صحيحة!');
    }   
    public function request(Request $request)
    {
        //
        $user = $request->user_id;
        $cnum = $request->cnum;
        $purpose = $request->purpose;
        $track =$request->track;
        $sdate = $request->sdate;
        $edate =$request->edate; 
        $client = new Client();
        $res = $client->request('POST', "http://wiqaia.org/public/api/neworder?user_id=".$user."&cnum=".$cnum."&purpose=".$purpose."&track=".$track."&sdate=".$sdate."&edate=".@$edate); 
        if(($res->getStatusCode())==200){


            return redirect()->back() ->with('alert', 'تم التسجيل بنجاح!');

        }
    }   
    public function notic($id)
    {   
        $id = (int)$id;
        $customers  =Customer::all();
        //echo 'this si customers '.$customers;
        $newc =new Customer();
        foreach( $customers  as  $customer)
        {
            if($customer->id==$id)
            $newc=$customer;
        }  
                $customer=$newc;
        
        return view('guests.notice')->withcustomer($customer);
    }


    public function doct($id)
    {   
        $id = (int)$id;
        $customers  =Customer::all();
        //echo 'this si customers '.$customers;
        $newc =new Customer();
        foreach( $customers  as  $customer)
        {
            if($customer->id==$id)
            $newc=$customer;
        }  
                $customer=$newc;
        
        return view('guests.doctor')->withcustomer($customer);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\guest  $guest
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\guest  $guest
     * @return \Illuminate\Http\Response
     */

     
}