<?php

namespace Corp;


//Class which implements Illuminate\Contracts\Auth\Authenticatable
use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
	//Mass назначенный атрибутов
  protected $fillable = [
      'name', 'email', 'password', 'nick', 'phone1','phone2','country','city'
  ];

	//Скрытый атрибут
	protected $hidden = [
       'password', 'remember_token',
	];
   

}