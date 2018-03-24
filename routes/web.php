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
Route::get('/', function () {
    return view('user/home');
});

//--------------USER-------------------

Route::get('apply_cnic',function(){
    return view('user/apply_cnic');
});

Route::post('apply_cinc' , ['as'=>'applycnic','uses'=>'UserController@applycnic']);

Route::get('cancel_cnic',function(){
    return view('user/cancel_cnic');
});
Route::get('modify_cnic',function(){
    return view('user/modify_cnic');
});
Route::get('verify_cnic',function(){
    return view('user/verify_cnic');
});
Route::get('reissue_cnic',function(){
    return view('user/reissue_cnic');
});
Route::get('about',['as'=>'about',function(){
	return view('user/about');
}]);


//------------------ADMIN--------------------

Route::group(['prefix' => 'admin'], function () {

Route::get('/', function()
{
	return View::make('admin.home');
});

Route::get('/charts', function()
{
	return View::make('admin.mcharts');
});

Route::get('/tables', function()
{
	return View::make('admin.table');
});

Route::get('/forms', function()
{
	return View::make('admin.form');
});

Route::get('/grid', function()
{
	return View::make('admin.grid');
});

Route::get('/buttons', function()
{
	return View::make('admin.buttons');
});


Route::get('/icons', function()
{
	return View::make('admin.icons');
});

Route::get('/panels', function()
{
	return View::make('admin.panel');
});

Route::get('/typography', function()
{
	return View::make('admin.typography');
});

Route::get('/notifications', function()
{
	return View::make('admin.notifications');
});

Route::get('/blank', function()
{
	return View::make('admin.blank');
});

Route::get('/login', function()
{
	return View::make('admin.login');
});

Route::get('/documentation', function()
{
	return View::make('admin.documentation');
});
});