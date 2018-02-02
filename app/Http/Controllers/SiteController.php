<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

use Corp\Repositories\MenusRepository;
use Menu;

class SiteController extends Controller

  {
   
    
	protected $m_rep;
    protected $a_rep;
    protected $b_rep;
    protected $c_rep;
    protected $e_rep;
    protected $i_rep;
	protected $k_rep;

	protected $o_rep;

	protected $r_rep;
    
    protected $keywords;
	protected $meta_desc;
	protected $title;
    
    protected $temlate;
    
    protected $vars = array();

    protected $contentRightBar = FALSE;
	protected $contentLeftBar = FALSE;
	
    
    protected $bar = 'no';
    
    
    public function __construct(MenusRepository $m_rep) {
		$this->m_rep = $m_rep;
	}
	
	
	protected function renderOutput() {
		
		
		$menu = $this->getMenu();
		
		//dd($menu);
		
		$navigation = view(env('THEME').'.navigation')->with('menu',$menu)->render();
		$this->vars = array_add($this->vars,'navigation',$navigation);
		
		if($this->contentLeftBar) {
			$leftBar = view(env('THEME').'.leftBar')->with('content_leftBar',$this->contentLeftBar)->render();
			$this->vars = array_add($this->vars,'leftBar',$leftBar);
		}
		
		
		
		$this->vars = array_add($this->vars,'keywords',$this->keywords);
		$this->vars = array_add($this->vars,'meta_desc',$this->meta_desc);
		$this->vars = array_add($this->vars,'title',$this->title);
		
		
		
		$footer = view(env('THEME').'.footer')->render();
		$this->vars = array_add($this->vars,'footer',$footer);
		
		return view($this->template)->with($this->vars);
	}
	
	public function getMenu() {
		
		$menu = $this->m_rep->get();
		
		
		
		$mBuilder = Menu::make('MyNav', function($m) use ($menu) {
			
			foreach($menu as $item) {
				
				if($item->parent == 0) {
					$m->add($item->title,$item->path)->id($item->id);
				}
				else {
					if($m->find($item->parent)) {
						$m->find($item->parent)->add($item->title,$item->path)->id($item->id);
					}
				}
			}
			
		});
		
		//dd($mBuilder);
		
		return $mBuilder;
	}	
    
    
}

