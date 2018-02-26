<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function animals ()
	{
	return $this->belongsTo('Corp\Animal','clinic');	
	}
	 public function regions ()
	{
		return $this->hasOne('Corp\Region', 'id', 'region');
	}
}
