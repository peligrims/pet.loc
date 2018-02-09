<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    public function animals() {
			return $this->hasMany('Corp\Animal')
		}
}
