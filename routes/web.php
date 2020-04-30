<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'firewall.all'], function () {
    
Route::get('/', function () {   return view('index'); });
Route::get('/ulogin', function () {
    return view('ulogin');
});

Route::get('/uregister', function () {
    return view('uregister');
});
Route::post('/addoc', 'GuestController@regdoc')->name('addoc');
Route::get('/mynotice/{id}','GuestController@notic')->name('mynotice');
Route::get('/mydocs/{id}', 'GuestController@doct')->name('mydocs');
Route::post('/mylogin', 'GuestController@log')->name('mylogin');
Route::post('/req-rder', 'GuestController@request')->name('req-order');

Route::resource('/guests', 'GuestController'); 
Route::get('/home', 'HomeController@index')->name('home');
Route::group( [ 'prefix' => 'admin'], function()
{
Auth::routes();
 
Route::get('/', 'ReportController@main')->middleware('auth');
Route::resource('/customers', 'CustomerController')->middleware('auth');
Route::resource('/doctors', 'DoctorController'); 
Route::resource('/orders', 'OrderController')->middleware('auth'); 
Route::resource('/posts', 'PostController')->middleware('auth'); 
Route::resource('/users', 'HomeController')->middleware('auth'); 
Route::resource('/notices', 'NoticeController')->middleware('auth'); 

});
    
});