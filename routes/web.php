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
Route::get('/admin/wanted/{wanted}','AdminController@ViewWanted')->name('admin.wanted.view');

Route::get('/admin/police','AdminController@police')->name('admin.police');

Route::get('/admin/missing','AdminController@missing')->name('admin.missing');

Route::get('/admin/missing/{missing}','AdminController@ViewMissing')->name('admin.missing.view');
Route::post('/admin/add/station','AdminController@AddStation')->name('station.add');
Route::post('/admin/add/county','AdminController@AddCounty')->name('county.add');

Route::post('/admin/add/subcounty','AdminController@AddSubCounty')->name('subcounty.add');


Route::get('/admin/new/policeoficer','AdminController@newPoliceOfficer')->name('police.new');
Route::post('/admin/add/policeoficer','AdminController@AddPoliceOfficer')->name('police.add');

 Route::get('admin/edit/station/{station}','AdminController@EditStation')->name('edit.station');

Route::put('admin/update/station/{station}','AdminController@UpdateStation')->name('station.update');

//delete
Route::get('admin/remove/station/{station}','AdminController@DeleteStation')->name('station.delete');

Route::get('admin/remove/police/{police}','AdminController@DeletePolice')->name('police.delete');

Route::get('admin/remove/subcounty/{subcounty}','AdminController@DeleteSubCounty')->name('subcounty.delete');

Route::get('admin/remove/county/{county}','AdminController@RemoveCounty')->name('county.delete');


Route::get('admin/remove/missing/{missing}','AdminController@RemoveMissing')->name('missing.delete');

Route::get('admin/remove/wanted/{wanted}','AdminController@RemoveWanted')->name('wanted.delete');

//delete
Route::get('admin/edit/police/{police}','AdminController@EditPolice')->name('edit.police');

Route::put('admin/update/police/{police}','AdminController@UpdatePolice')->name('police.update');


Route::get('admin/edit/subcounty/{subcounty}','AdminController@EditSubCounty')->name('edit.subcounty');

Route::put('admin/update/subcounty/{subcounty}','AdminController@UpdateSubCounty')->name('subcounty.update');

Route::get('admin/edit/county/{county}','AdminController@EditCounty')->name('edit.county');
Route::put('admin/update/county/{county}','AdminController@UpdateCounty')->name('county.update');


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

//crime routes 
Route::put('/crime/{crime}/update','CrimeController@UpdateStatus')->name('police.update.crime');
Route::put('/wanted/{wanted}/update','WantedController@UpdateStatus')->name('police.update.wanted');
Route::put('/missing/{missing}/update','MissingController@UpdateStatus')->name('police.update.missing');


//Route to create new 
Route::get('/police/create/wanted','WantedController@create')->name('police.wanted.create');
Route::post('/police/create/wanted','WantedController@newWanted')->name('police.wanted.store');


Route::get('/police/create/missing','MissingController@create')->name('police.missing.create');
Route::post('/police/create/missing','MissingController@newMissing')->name('police.missing.store');

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
