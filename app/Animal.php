<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
	public function сlinic() {
		return $this->hasOne('Corp\Clinic');
	}
	public function kind() {
		return $this->hasOne('Corp\Kind');
	}

	
}
