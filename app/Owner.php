<?php

namespace Corp;


//Class which implements Illuminate\Contracts\Auth\Authenticatable
use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
  //Mass assignable attributes
  protected $fillable = [
      'name', 'email', 'password',
  ];

  //hidden attributes
   protected $hidden = [
       'password', 'remember_token',
   ];
   

}