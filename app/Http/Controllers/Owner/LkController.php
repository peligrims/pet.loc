<?php

namespace Corp\Http\Controllers\Owner;

use Illuminate\Http\Request;
use Corp\Http\Requests;
use Menu;
use Auth;
	
	
class LkController extends \Corp\Http\Controllers\Controller
{
	protected $o_rep;
	protected $a_rep;
	protected $template;
    protected $content = FALSE;
	protected $vars;
	protected $contentLeftBar = FALSE;
	protected $contentRightBar = FALSE;
	protected $bar = 'no';
	protected $keywords;
	protected $meta_desc;
	protected $title;
	
    public function renderOutput() {
		
		$this->vars = array_add($this->vars,'title',$this->title);				
		$menu = $this->getMenu();
		$navigation = view(env('THEME').'.owner.navigation')->with('menu',$menu)->render();
		$this->vars = array_add($this->vars,'navigation',$navigation);
		
		if($this->content) {
			$this->vars = array_add($this->vars,'content',$this->content);
		}
		
		//dd($this->contentRightBar);
		if($this->contentRightBar) {
			$rightBar = view(env('THEME').'.owner.rightBar')->with('content_rightBar',$this->contentRightBar)->render();
			$this->vars = array_add($this->vars,'rightBar',$rightBar);
		}
		
		
		if($this->contentLeftBar) {
			$leftBar = view(env('THEME').'.owner.leftBar')->with('content_leftBar',$this->contentLeftBar)->render();
			$this->vars = array_add($this->vars,'leftBar',$leftBar);
		}
		if($this->contentSideBar) {
			$sideBar= view(env('THEME').'.owner.sideBar')->with('content_leftBar',$this->contentSideBar)->render();
			$this->vars = array_add($this->vars,'sideBar', $sideBar);
		}
		
		
		
		//$this->vars = array_add($this->vars,'bar',$this->bar);
		$this->vars = array_add($this->vars,'keywords',$this->keywords);
		$this->vars = array_add($this->vars,'meta_desc',$this->meta_desc);
		$this->vars = array_add($this->vars,'title',$this->title);
		
		$footer = view(env('THEME').'.owner.footer')->render();
		$this->vars = array_add($this->vars,'footer',$footer);
		
		return view($this->template)->with($this->vars);
		
	}
	public function getMenu() {
		return Menu::make('ownerMenu', function($menu) {		    						
		$menu->add('Мой профиль',  array('route'  => 'home.ownerp.index')); 
		$menu->add('Мои животные',  array('route'  => 'home.animalp.index'));
		
		
		});
	}
}
