<?php


namespace Corp\Http\Controllers\Owner;

use Illuminate\Http\Request;

use Corp\Http\Requests;

use Corp\Repositories\AnimalsRepository;
use Corp\Repositories\ClinicsRepository;
use Corp\Repositories\OwnersRepository;
use DB;
use Corp\Animal;
use Corp\Clinic;
use Corp\Owner;
use Corp\Breed;


class SearchpController extends LkController
{
	
	
	public function __construct(AnimalsRepository $an_rep,ClinicsRepository $cl_rep, OwnersRepository $o_rep) {
    	
    	
    	
    	$this->an_rep = $an_rep;
		$this->cl_rep = $cl_rep;
		$this->o_rep = $o_rep;
		
		$this->bar = 'right';

    	$this->template = env('THEME').'.animals';
	
		
	}
	
	public function index(Request $request){
		$this->title = 'Поиск по номеру чипа';
		$this->keywords = 'Поиск по номеру чипа';
		$this->meta_desc = 'Поиск по номеру чипа';
		$chip=$request->input('q');		
		 //$animal = DB::table('animals')->first();
		$animal = Animal::where('chip','=',$chip)->first();
		//dd($animal);
		//$clinic=$animal->clinica;
		//$kind=$animal->kinds;
		//$breed=$animal->breeds;
		$ownerid =$animal->o_id;
		$owner = DB::table('owners')->where('id',$ownerid)->first();
		$breed=DB::table('breeds')->first();
		$animal->image = json_decode($animal->image);
		
		
        $content = view(env('THEME').'.animal_content')->with(['animal' => $animal,'owner' => $owner])->render();
        $this->vars = array_add($this->vars,'content',$content);	
		
		
				
		return $this->renderOutput();  
    }
	  
}
