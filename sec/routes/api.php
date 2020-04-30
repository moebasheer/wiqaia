<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('dreg','ApiController@dstore');
Route::post('loginr','ApiController@login');
Route::post('neworder','ApiController@ostore');
Route::post('newnotice','ApiController@nstore');
Route::post('reg','ApiController@userstore');
Route::post('ver','ApiController@userver');
Route::post('login','ApiController@userlogin');
Route::post('send','ApiController@sendmessage');

Use App\Order;
 
Route::get('customer/{id}', function($id) { return Order::where('user_id' , '=' , $id)->get(); });

Use App\Post;

Route::get('posts', function() { return Post::all(); }); 

Route::get('posts/{id}', function($id) { return Post::find($id); });

Use App\Notice;

Route::get('notices', function() { return Notice::all(); }); 

Route::get('notices/{id}', function($id) { return Notice::find($id); });
