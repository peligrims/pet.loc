<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

use Corp\Http\Requests;
use Corp\Clinics;
use Corp\Repositories\AnimalsRepository;
use Corp\Repositories\ClinicsRepository;
use DB;

class SearchController extends SiteController
{
	
	
	public function __construct(AnimalsRepository $a_rep,ClinicsRepository $cl_rep) {
    	
    	parent::__construct(new \Corp\Repositories\MenusRepository(new \Corp\Menu));
    	
    	$this->a_rep = $a_rep;
		$this->cl_rep = $cl_rep;

    	$this->template = env('THEME').'.animals';
		
	}
	
	public function index(Request $request){
		$this->title = 'Поиск по номеру чипа';
		$this->keywords = 'Поиск по номеру чипа';
		$this->meta_desc = 'Поиск по номеру чипа';	

		
		$animal = $request->all();
	    $results = DB::table('animals')
                    ->where('chip',$animal )
                    ->first();
		
		$clinic = $results->clinic;
        $clinics = DB::table('clinics')
                    ->where('id', $clinic)
                    ->first();
		$kind =	$results->kind;
		$kinds = DB::table('kinds')
                    ->where('id',$kind)
                    ->first();		
		$breed = $results->breed;
		$breeds = DB::table('breeds')
                    ->where('id',$breed)
                    ->first();
		
		
		
		
		
        $content = view(env('THEME').'.animal_content')->with(['results' => $results,'clinics' => $clinics,'kinds' => $kinds])->render();
        $this->vars = array_add($this->vars,'content',$content);	
		
		
        
		
		
		return $this->renderOutput();
		
    }
	public function getAnimals() 
	{
		
	}

}
