<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    
     protected $fillable = ['title','img','text','image','url','alias'];
	
	
	public function filter() {
		return $this->belongsTo('Corp\Filter','filter_alias','alias');
	}
	
}
