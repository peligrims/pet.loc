<?php

// Маршруты основного меню
Route::resource('/','IndexController',['only' =>['index'],'names' => ['index'=>'/']]);
Route::resource('information','InformationController',['information' => ['information' => 'alias']]);
Route::resource('insurance','InsuranceController',['insurance' => ['insurance' => 'alias']]);
Route::resource('equipment','EquipmentController',['equipment' => ['equipment' => 'alias']]);
Route::resource('portfolios','PortfolioController',['parameters' => ['portfolios' => 'alias']]);
//Route::resource('articles','ArticlesController',['parameters'=>['articles' => 'alias']]);	
Route::resource('сlinics','ClinicsController',['сlinics' => ['сlinics' => 'alias']]);
Route::resource('animals','AnimalsController',['parameters' => ['animals' => 'chip']]);
Route::get('searchSimple', 'SearchController@index')->name('searchSimple');
Route::match(['get','post'],'/contacts',['uses'=>'ContactsController@index','as'=>'contacts']);	


//Не пользователи  не могут получать или отправлять запросы на эти страницы
Route::post('owner_logout', 'OwnerAuth\LoginController@logout');
Route::group(['middleware' => 'owner_guest'], function() {
Route::get('owner_register', 'OwnerAuth\RegisterController@showRegistrationForm');
Route::post('owner_register', 'OwnerAuth\RegisterController@register');
Route::get('owner_login', 'OwnerAuth\LoginController@showLoginForm');
Route::post('owner_login', 'OwnerAuth\LoginController@login');

});

//Только зарегистрированные Владельцы могут получить доступ  на эти страниц
Route::group(['as' => 'home.', 'prefix' => 'home', 'middleware' => 'owner_auth'], function(){
Route::get('/',['uses' => 'Owner\PersonalController@index','as' => 'ownerIndex']);
Route::get('ownerp', 'Owner\OwnerpController@index');
Route::resource('animalp', 'Owner\AnimalpController', ['only' => [
    'index', 'show', 'create', 'edit'
]]); 
Route::post('owner_logout', 'OwnerAuth\LoginController@logout');
});

//Только зарегистрированные  Администраторы могут получать или отправлять запросы на эти страницы 
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







 


