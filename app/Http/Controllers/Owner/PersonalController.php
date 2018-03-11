<?php

namespace Corp\Http\Controllers\Owner;

use Illuminate\Http\Request;
use Corp\Repositories\AnimalsRepository;
use Corp\Owner;
use Auth;
use Gate;
use Menu;

class PersonalController extends LkController
{
    public function __construct() {		
		$this->template = env('THEME').'.owner.index';		
	}

   public function index()
    {
		$this->title = 'Личный кабинет';
		return $this->renderOutput();
    }
    
}
