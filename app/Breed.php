<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    public function kinds ()
	{
		return $this->hasOne('Corp\Kind', 'id', 'kind');
	}
}
