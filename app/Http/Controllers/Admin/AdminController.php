<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Corp\Http\Requests;
use Corp\Http\Controllers\Controller;

use Auth;
use Gate;
use Menu;

class AdminController extends \Corp\Http\Controllers\Controller
{
    //
    
    protected $p_rep;
    
    protected $a_rep;
    
    protected $user;
    
    protected $template;
    
    protected $content = FALSE;
    
    protected $title;
    
    protected $vars;
    
    public function __construct() {
		
		$this->user = Auth::user();
		
		if($this->user) {
			abort(404);
		}
	}
	
	public function renderOutput() {
		$this->vars = array_add($this->vars,'title',$this->title);
		
		$menu = $this->getMenu();
		
		$navigation = view(env('THEME').'.admin.navigation')->with('menu',$menu)->render();
		$this->vars = array_add($this->vars,'navigation',$navigation);
		
		if($this->content) {
			$this->vars = array_add($this->vars,'content',$this->content);
		}
		
		$footer = view(env('THEME').'.admin.footer')->render();
		$this->vars = array_add($this->vars,'footer',$footer);
		
		return view($this->template)->with($this->vars);
		
		
		
		
	}
	
	public function getMenu() {
		return Menu::make('adminMenu', function($menu) {
			
						
			$menu->add('Животные',  array('route'  => 'admin.animals.index'));
			$menu->add('Клиники',  array('route'  => 'admin.clinics.index'));
			$menu->add('Породы',  array('route'  => 'admin.breeds.index'));
			$menu->add('Клиенты',  array('route'  => 'admin.owners.index'));
			$menu->add('Партеры',  array('route'  => 'admin.partners.index'));
			$menu->add('Оборудование',  array('route'  => 'admin.equipments.index'));
			$menu->add('Юзеры',  array('route'  => 'admin.users.index'));
			$menu->add('Новости     ',  array('route'  => 'admin.informations.index'));
			$menu->add('Доступ',  array('route'  => 'admin.permissions.index'));
			
						
		});
	}
	
	
}
