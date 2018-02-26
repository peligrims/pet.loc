<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

use Corp\Http\Requests;
use Corp\Clinics;
use Corp\Repositories\AnimalsRepository;
use Corp\Repositories\ClinicsRepository;
use Corp\Repositories\OwnersRepository;
use DB;
use Corp\Animal;
use Corp\Clinic;
use Corp\Owner;

class SearchController extends SiteController
{
	
	
	public function __construct(AnimalsRepository $a_rep,ClinicsRepository $cl_rep, OwnersRepository $o_rep) {
    	
    	parent::__construct(new \Corp\Repositories\MenusRepository(new \Corp\Menu));
    	
    	$this->a_rep = $a_rep;
		$this->cl_rep = $cl_rep;
		$this->o_rep = $o_rep;
		
		$this->bar = 'right';

    	$this->template = env('THEME').'.animals';
	
		
	}
	
	public function index(Request $request){
		$this->title = 'Поиск по номеру чипа';
		$this->keywords = 'Поиск по номеру чипа';
		$this->meta_desc = 'Поиск по номеру чипа';	
		
	
		
		$animal = $request->all();

		$animals=Animal::where('chip', $animal)->first();
	
		$clinics=$animals->clinics->title;
		$kinds=$animals->kinds;
		$breeds=$animals->breeds;
		$owners=$animals->owners;
		
		$animals->image = json_decode($animals->image);
		//dd($animals);
		
		
		
	
        $content = view(env('THEME').'.animal_content')->with(['animals' => $animals,'clinics' => $clinics])->render();
        $this->vars = array_add($this->vars,'content',$content);	
		
		
				
		return $this->renderOutput();  
    }
	  
}
