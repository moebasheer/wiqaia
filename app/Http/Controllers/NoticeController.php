<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notice;
use Session;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Message\Topics;
use FCM; 
class NoticeController extends Controller
{
 
    public function index()
    { 
        $notices = Notice::orderBy('id', 'desc')->paginate(10); 
        return view('notices.index')->withnotices($notices);
    }
  
    public function create()
    {
        $notice = Notice::all();  
        return view('notices.create')->withnotice($notice);
    }

    public function store(Request $request)
    {
        // Save a new Comment and then redirect back to index
        $this->validate($request, array(
            'name' => 'required|max:255' , 
            'tel' => 'required|max:255'  ,   
            'city'  => 'required|max:255'  
            ));

        $notice = new Notice;

        $name = $notice->name = $request->name ;
        $tel = $notice->tel = $request->tel ; 
        $city = $notice->city = $request->city ;
        $body = $notice->body = $request->body ;
        $address = $notice->address = $request->address ;              
        
        $notice->save(); 
       
        $id =   $notice->id ; 
        
        Session::flash('success', 'تم اضافة ');
        
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'type' => 'Notices',
            'id' => $id, 
            'name' => $name , 
            'tel' => $tel ,     
            'city' => $city  , 
            'body' => $body  ,   
            'address' => $address   
        ]);
        
        $data = $dataBuilder->build();
        
        
        $topic = new Topics();
        $topic->topic('wiqaia');
        
        $topicResponse = FCM::sendToTopic($topic, null, null , $data );
        
        $result = $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error(); 
        
        
        return redirect()->route('notices.show',$notice->id);
    }
 
    public function show($id)
    { 
        $notice = Notice::find($id);
        return view('notices.show')->withnotice($notice);
    }

    public function edit($id)
    {
        $notice = Notice::find($id); 
        return view('notices.edit')->withnotice($notice);
    }
 
    public function update(Request $request, $id)
    { 
        $notice = Notice::find($id);

        if ($request->input('name') == $notice->name) {
            $this->validate($request, array( 
                'name'         => 'required' 
            ));
        } else {
        $this->validate($request, array(  
            ));
        }

        $notice = Notice::find($id);
 
        $name = $notice->name = $request->input('name');    
        $tel  = $notice->tel = $request->input('tel');      
        $city = $notice->city = $request->input('city');    
        $body = $notice->body = $request->input('body');    
        $address  = $notice->address = $request->input('address');   
  
        $notice->save();   
        Session::flash('success', 'تم التعديل ');
 
        return redirect()->route('notices.show', $notice->id);
    }
 
    public function destroy($id)
    {
    
        $notice = Notice::find($id); 

        $notice->delete();

        Session::flash('success', 'تم الحذف');
               
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'type' => 'dNotices',
            'id' => $id 
        ]);
        
        $data = $dataBuilder->build();
        
        
        $topic = new Topics();
        $topic->topic('wiqaia');
        
        $topicResponse = FCM::sendToTopic($topic, null, null , $data );
        
        $result = $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error(); 
        
        return redirect()->route('notices.index');
    }
    
}  
