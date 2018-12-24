<?php

namespace Corp\Http\Controllers\Owner;

use Illuminate\Http\Request;
use Corp\Repositories\AnimalsRepository;
use Corp\Http\Requests\OwnerRequest;
use Corp\Repositories\OwnersRepository;
use Corp\Owner;
use Auth;
use Gate;
use Menu;

class PersonalController extends LkController
{
	protected $keywords;
	protected $meta_desc;
	protected $title;
    
    protected $temlate;
	protected $contentLeftBar = FALSE;
	protected $contentRightBar= FALSE;
	protected $contentSideBar= FALSE;	
	protected $content= FALSE;	
	protected $bar = 'no';

	
	
    public function __construct(OwnersRepository $o_rep) {		
	
	    //$this->bar = 'left';
		$this->bar = 'right';
		$this->template = env('THEME').'.owner.index';
		$this->o_rep = $o_rep;
	}

	public function index()
    {
	
        
		
		$this->title = 'Личный кабинет';
		
		$this->contentLeftBar = view(env('THEME').'.owner.indexBar')->render();

		$this->contentRightBar = view(env('THEME').'.owner.indexBar')->render();
		
		$this->contentSideBar  = view(env('THEME').'.owner.sideBar')->render();
		
		
		$owner = $this->getOwners();
		//dd($owner->sex);
			
		$this->content = view(env('THEME').'.owner.content')->with('owner',$owner)->render();
		
        $this->vars = array_add($this->vars,'content', $this->content);
		
		return $this->renderOutput();
    }
	public function getOwners()
		{
			$owner = Auth::guard('web_owner')->user();		
			return $owner;
		}
	 public function update(Request $request,$id)
    {
		$owner = $this->getOwners();
	   
	   $result = $this->o_rep->updateOwner($request, $owner);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
        
    }	
}
