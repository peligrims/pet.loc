<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Corp\Http\Requests;
use Corp\Http\Controllers\Controller;

use Auth;
use Gate;

class IndexController extends AdminController
{
   //Проверка разрешения для пользователя Правило авторизации в AuthServiceProvider
    
    public function __construct() {
		
		parent::__construct();
		
		
		
		
		$this->template = env('THEME').'.admin.index';
		
	}
	
	public function index() {
		
		
	
		$this->title = 'Панель администратора';
		
		return $this->renderOutput();
		
	}
}
