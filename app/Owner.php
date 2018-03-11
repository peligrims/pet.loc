<?php

namespace Corp;


//Class which implements Illuminate\Contracts\Auth\Authenticatable
use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
	//Mass назначенный атрибутов
  protected $fillable = [
      'name', 'email', 'password',
  ];

	//Скрытый атрибут
	protected $hidden = [
       'password', 'remember_token',
	];
   public function getId()
	{
	  return $this->id;
	}

}