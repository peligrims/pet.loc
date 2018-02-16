<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function clinics ()
	{
		return $this->hasOne('Corp\Clinic', 'id', 'clinic');
	}
	public function kinds ()
	{
		return $this->hasOne('Corp\Kind', 'id', 'kind');
	}
}
