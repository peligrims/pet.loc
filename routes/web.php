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
/* DB::listen(function($query) {
    var_dump($query->sql, $query->bindings);
}); */


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
 
													'parameters' => [

														'animals' => 'alias'

													]

													]);
Route::get('searchSimple', 'SearchController@index')->name('searchSimple');

Route::match(['get','post'],'/contacts',['uses'=>'ContactsController@index','as'=>'contacts']);	

//Logged in users/seller cannot access or send requests these pages
Route::group(['middleware' => 'seller_guest'], function() {

Route::get('seller_register', 'SellerAuth\RegisterController@showRegistrationForm');
Route::post('seller_register', 'SellerAuth\RegisterController@register');
Route::get('seller_login', 'SellerAuth\LoginController@showLoginForm');
Route::post('seller_login', 'SellerAuth\LoginController@login');

});

//Only logged in sellers can access or send requests to these pages
Route::group(['middleware' => 'seller_auth'], function(){

Route::post('seller_logout', 'OwnerAuth\LoginController@logout');
Route::get('/seller_home', function(){
  return view('seller.home');
});

});


//Logged in users/owner cannot access or send requests these pages
Route::group(['middleware' => 'owner_guest'], function() {

Route::get('owner_register', 'OwnerAuth\RegisterController@showRegistrationForm');
Route::post('owner_register', 'OwnerAuth\RegisterController@register');
Route::get('owner_login', 'OwnerAuth\LoginController@showLoginForm');
Route::post('owner_login', 'OwnerAuth\LoginController@login');

});

//Only logged in sellers can access or send requests to these pages
Route::group(['middleware' => 'owner_auth'], function(){

Route::post('owner_logout', 'OwnerAuth\LoginController@logout');
Route::get('/owner_home', function(){
  return view('owner.home');
});

});



 
  
Route::auth();

Route::get('logout','Auth\LoginController@logout');

  Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function() {
	
	
	Route::get('/',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);
	
	Route::resource('/animals','Admin\AnimalsController');
	Route::resource('/clinics','Admin\ClinicsController');
	Route::resource('/breeds','Admin\BreedsController');
	Route::resource('/owners','Admin\OwnersController');
	Route::resource('/partners','Admin\PartnersController');
	Route::resource('/equipments','Admin\EquipmentsController');
	Route::resource('/users','Admin\UsersController');
	Route::resource('/permissions','Admin\PermissionsController');
}); 







 


