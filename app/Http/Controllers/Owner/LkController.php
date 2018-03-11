<?php

namespace Corp\Http\Controllers\Owner;

use Illuminate\Http\Request;
use Auth;
use Corp\Http\Requests;

use Menu;
	/* protected $p_rep;
    
    protected $a_rep;
    
    protected $user;
   */
    
     
	
class LkController extends \Corp\Http\Controllers\Controller
{
	protected $o_rep;
	protected $a_rep;
	protected $template;
    protected $title;
    protected $content = FALSE;
	protected $vars;
	
    public function renderOutput() {
		
		$this->vars = array_add($this->vars,'title',$this->title);
		
		
		$menu = $this->getMenu();
		//dd($menu);
		
		$navigation = view(env('THEME').'.owner.navigation')->with('menu',$menu)->render();
		$this->vars = array_add($this->vars,'navigation',$navigation);
		if($this->content) {$this->vars = array_add($this->vars,'content',$this->content);}		
		$footer = view(env('THEME').'.owner.footer')->render();
		$this->vars = array_add($this->vars,'footer',$footer);
		
		return view($this->template)->with($this->vars);
		
	}
	public function getMenu() {
		return Menu::make('ownerMenu', function($menu) {		    
		$menu->add('Данные о владельце',['action'  => 'Owner\OwnerpController@index']);
        $menu->add('Данные о питомцах',['action'  => 'Owner\AnimalpController@index']);     				
		});
	}
}
