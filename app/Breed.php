<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    public function animals ()
	{
	return $this->belongsTo('Corp\Animal','clinic');	
	}
	public function kinds ()
	{
		return $this->hasOne('Corp\Kind', 'id', 'kind');
	}
}
