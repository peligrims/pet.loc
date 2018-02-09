<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
	public function сlinica() {
		return $this->hasOne('Corp\Clinic','id','clinic');
	}
	

	
}


