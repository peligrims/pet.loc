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

Route::resource('/','IndexController',[
									'only' =>['index'],
									'names' => ['index'=>'home']
									]);
Route::resource('information','InformationController',[
													 
													'information' => [
													
														'information' => 'alias'
													
													]
													
													]);
Route::resource('insurance','InsuranceController',[
 
'insurance' => [

	'insurance' => 'alias'

]

]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get','post'],'/contacts',['uses'=>'ContactsController@index','as'=>'contacts']);	
