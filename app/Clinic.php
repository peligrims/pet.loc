<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
		public function animal() {
			return $this->belongsTo('Corp\Animal');
		}

}

