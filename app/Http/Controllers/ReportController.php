<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Input;
use App\Authorizable;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;   
use DB;  
use App\Customer;
use App\Doctor;
use App\Notice;
use App\Order; 
use App\Post; 

use Purifier;
use Image;
use Session; 
use Counter;

class ReportController extends Controller
{ 
    
    //use Authorizable;

    public function  index() { 
  
        $customers = Customer::all(); 
        $doctors = Doctor::all(); 
        $notices = Notice::all(); 
        $orders = Order::all(); 
        $posts = Post::all(); 
          
         

        return view('report',compact(['customers', 'doctors',
            'notices','orders' ,'posts'])); 
    }

     
    public function  main() {

        $customers = Customer::all(); 
        $doctors = Doctor::all(); 
        $notices = Notice::all(); 
        $orders = Order::all(); 
        $posts = Post::all(); 
         
         
        
        $o3 = Order::where('status','=','3')->count();
        $o4 = Order::where('status','=','4')->count();
         

        return view('main',compact(['customers', 'doctors',
            'notices','orders' ,'posts','o3','o4'])); 
    }


}

