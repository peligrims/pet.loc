<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function animals ()
	{
	return $this->belongsTo('Animal','clinic');	
	}
}
