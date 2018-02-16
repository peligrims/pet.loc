<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    public function anik() 
	{
	return $this->belongsTo('Animal','kind');		
	}
}
