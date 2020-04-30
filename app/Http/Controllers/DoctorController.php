<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Doctor;
use Session;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Message\Topics;
use FCM; 
class DoctorController extends Controller
{
 
    public function index()
    { 

        $doctors = Doctor::orderBy('id', 'desc')->paginate(10); 
        return view('doctors.index')->withdoctors($doctors);
    }
  
    public function create()
    {
        $doctor = Doctor::all();  
        return view('doctors.create')->withdoctor($doctor);
    }

    public function store(Request $request)
    {
        // Save a new Comment and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255' , 
            'tel' => 'required|max:255'  ,
            'national' => 'required|max:11'  ,   
            'job'  => 'required|max:255' , 
            'city'  => 'required|max:255'  
            ));

        $doctor = new Doctor;

        $name = $doctor->name = $request->name ;
        $tel = $doctor->tel = $request->tel ;
        $job = $doctor->job = $request->job ;
        $national = $doctor->national = $request->input('national');   
        $city = $doctor->city = $request->city ;
        $address = $doctor->address = $request->address ;              
        
        $doctor->save(); 
        
        $id =   $doctor->id ; 
        
        Session::flash('success', 'تم اضافة ');
        
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'type' => 'Doctors',
            'id' => $id, 
            'name' => $name , 
            'tel' => $tel , 
            'job' => $job  ,   
            'city' => $city  ,   
            'address' => $address   
        ]);
        
        $data = $dataBuilder->build();
        
        
        $topic = new Topics();
        $topic->topic('wiqaia');
        
        $topicResponse = FCM::sendToTopic($topic, null, null , $data );
        
        $result = $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error(); 
        
        
        //return redirect()->route('doctors.show',$doctor->id);
        //return view('index');
        return redirect()->back() ->with('alert', 'تم التسجيل بنجاح!');
    }
 
    public function show($id)
    { 

        $doctor = Doctor::find($id);
        return view('doctors.show')->withdoctor($doctor);
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id); 
        return view('doctors.edit')->withdoctor($doctor);
    }
 
    public function update(Request $request, $id)
    { 
        $doctor = Doctor::find($id);

        if ($request->input('name') == $doctor->name) {
            $this->validate($request, array( 
                'name'         => 'required' 
            ));
        } else {
        $this->validate($request, array(  
            ));
        }

        $doctor = Doctor::find($id);
 
        $name = $doctor->name = $request->input('name');    
        $tel  = $doctor->tel = $request->input('tel');    
        $job = $doctor->job = $request->input('job');    
        $city = $doctor->city = $request->input('city');    
        $address  = $doctor->address = $request->input('address');   
  
        $doctor->save();   
        Session::flash('success', 'تم التعديل ');
 
        return redirect()->route('doctors.show', $doctor->id);
    }
 
    public function destroy($id)
    {
    
        $doctor = Doctor::find($id); 

        $doctor->delete();

        Session::flash('success', 'تم الحذف');
               
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'type' => 'dDoctors',
            'id' => $id 
        ]);
        
        $data = $dataBuilder->build();
        
        
        $topic = new Topics();
        $topic->topic('wiqaia');
        
        $topicResponse = FCM::sendToTopic($topic, null, null , $data );
        
        $result = $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error(); 
        
        return redirect()->route('doctors.index');
    }
    
}  
