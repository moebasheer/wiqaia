<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use Session;

use LaravelFCM\Message\OptionsBuilder;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Message\Topics;
use FCM; 

class PostController extends Controller
{
   public function index()
    { 
        $posts = Post::orderBy('id', 'desc')->paginate(10); 
        return view('posts.index')->withposts($posts);
    }
  
    public function create()
    {
        $post = Post::all();  
        return view('posts.create')->withpost($post);
    }

    public function store(Request $request)
    { 
        $this->validate($request, array(
            'title' => 'required|max:255'    
            ));

        $post = new Post;

        $title = $post->title = $request->title ;
        $body = $post->body = $request->body ;           
        
        $post->save(); 

        $id =   $post->id ;
        Session::flash('success', 'تم اضافة المقال');
        
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'type' => 'Posts',
            'id' => $id, 
            'title' => $title, 
            'body' => $body  
        ]);
        
        $data = $dataBuilder->build();
        
        
        $topic = new Topics();
        $topic->topic('wiqaia');
        
        $topicResponse = FCM::sendToTopic($topic, null, null , $data );
        
        $result = $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error(); 
                                
        return redirect()->route('posts.show',$post->id);
    }
 
 
    public function show($id)
    { 
        $post = Post::find($id);
        return view('posts.show')->withpost($post);
    }

    public function edit($id)
    {
        $post = Post::find($id); 
        return view('posts.edit')->withpost($post);
    }
 
    public function update(Request $request, $id)
    { 
        $post = Post::find($id);

        if ($request->input('title') == $post->title) {
            $this->validate($request, array( 
                'title'         => 'required' 
            ));
        } else {
        $this->validate($request, array(  
            ));
        }

        $post = Post::find($id);
 
        $title = $post->title = $request->input('title');    
        $body = $post->body = $request->input('body');      
  
        $post->save();   
        Session::flash('success', 'تم التعديل ');
 
        return redirect()->route('posts.show', $post->id);
    }
 
    public function destroy($id)
    {
    
        $post = Post::find($id); 

        $post->delete();

        Session::flash('success', 'تم الحذف');
       
        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData([
            'type' => 'dPosts',
            'id' => $id 
        ]);
        
        $data = $dataBuilder->build();
        
        
        $topic = new Topics();
        $topic->topic('wiqaia');
        
        $topicResponse = FCM::sendToTopic($topic, null, null , $data );
        
        $result = $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error(); 
        
        return redirect()->route('posts.index');
    }
    
} 