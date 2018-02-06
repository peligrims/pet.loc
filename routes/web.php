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
Route::resource('equipment','EquipmentController',[
 
													'equipment' => [

														'equipment' => 'alias'

													]

													]);
Route::resource('portfolios','PortfolioController',[
													 
													'parameters' => [
													
														'portfolios' => 'alias'
													
													]
													
													]);
Route::resource('articles','ArticlesController',[

													'parameters'=>[

														'articles' => 'alias'

													]

													]);	
													
Route::resource('сlinics','ClinicsController',[
 
													'сlinics' => [

														'сlinics' => 'alias'

													]

													]);
Route::resource('animals','AnimalsController',[
 
													'animals' => [

														'animals' => 'id'

													]

													]);
													
													


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get','post'],'/contacts',['uses'=>'ContactsController@index','as'=>'contacts']);	

Route::get('login','Auth\AuthController@showLoginForm');

Route::post('login', ['uses'=>'Auth\AuthController@login','as'=>'login']);

Route::get('logout','Auth\AuthController@logout');
 



//admin

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('/',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);
	Route::resource('/animals','Admin\AnimalsController');
	Route::resource('/clinics','Admin\ClinicsController');
	Route::resource('/kinds','Admin\KindsController');
	Route::resource('/owners','Admin\OwnersController');
	Route::resource('/equipments','Admin\EquipmentsController');
	Route::resource('/breeds','Admin\BreedsController');

	
});




