<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    
	protected $fillable = ['chip','nick','clinic','kind','breed','color','sex','birthday','image'];
	
	public function clinica ()
	{
		return $this->hasOne('Corp\Clinic', 'id', 'clinic');
	}
	public function kinds ()
	{
		return $this->hasOne('Corp\Kind', 'id', 'kind');
	}
	public function breeds ()
	{
		return $this->hasOne('Corp\Breed', 'id', 'breed');
	}
	public function owners ()
	{
		return $this->hasOne('Corp\Owner', 'id', 'o_id');
	}
}
