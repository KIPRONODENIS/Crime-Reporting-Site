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

Route::get('/','WelcomeController@index');

Route::get('/admin','AdminController@index')->name('admin.home')->middleware('auth');

Route::get('/admin/stations','AdminController@stations')->name('admin.stations');
Route::get('/admin/counties','AdminController@counties')->name('admin.counties');
Route::get('/admin/subcounties','AdminController@subcounties')->name('admin.subcounties');
Route::get('/admin/wanted','AdminController@wanted')->name('admin.wanted');

Route::get('/admin/police','AdminController@police')->name('admin.police');

Route::get('/admin/missing','AdminController@missing')->name('admin.missing');

//PoliCE Routes 
Route::get('police/wanted','HomeController@wanted')->name('police.wanted');
Route::get('police/missing','HomeController@missing')->name('police.missing');

//Route to view and report 
Route::get('details/{person}/wanted','WantedController@show')->name('wanted.show');
Route::get('report/{person}/wanted','WantedController@report')->name('wanted.report')->middleware('auth');
Route::post('/wanted/store','WantedController@store')->name('wanted.store');

//Route to view and report 
Route::get('details/{person}/missing','MissingController@show')->name('missing.show');
Route::get('report/{person}/missing','MissingController@report')->name('missing.report');



//Route to show login form
Route::get('/login','Auth.LoginController@showLoginForm')->name('login');
//Route to register
Route::get('register',function(){

  return view('auth.register');
})->name('register');
//Route to report a crime
Route::get('/report','ReportController@index')->name('report')->middleware('auth');
Route::post('/report','ReportController@store')->name('crime.create')->middleware('auth');
//profile route


Route::get('/profile','UserController@profile');
//Authentication routes
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
