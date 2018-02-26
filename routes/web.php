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


/* Route::resource('test','TestController',[
 
													'test' => [

														'test' => 'alias'

													]

													]);
													 */



Route::match(['get','post'],'/contacts',['uses'=>'ContactsController@index','as'=>'contacts']);	



Auth::routes();

//Route::get('login','Auth\AuthController@showLoginForm');

//Route::post('login', ['uses'=>'Auth\AuthController@login','as'=>'login']);

//Route::get('logout','Auth\AuthController@logout');




Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('/',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);
	
	Route::resource('/animals','Admin\AnimalsController');
	Route::resource('/clinics','Admin\ClinicsController');
	Route::resource('/breeds','Admin\BreedsController');
	Route::resource('/owners','Admin\OwnersController');
	Route::resource('/partners','Admin\PartnersController');
	Route::resource('/equipments','Admin\EquipmentsController');
	Route::resource('/users','Admin\UsersController');
	Route::resource('/lk','Admin\LkController');
	
//Route::resource('/permissions','Admin\AnimalsController');

	
});



 


