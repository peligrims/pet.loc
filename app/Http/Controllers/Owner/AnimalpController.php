<?php

namespace Corp\Http\Controllers\Owner;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\OwnersRepository;
use Corp\Repositories\AnimalsRepository;
use Corp\Owner;
use Corp\Animal;
use Illuminate\Support\Facades\Auth;

class AnimalpController extends LkController
{
    public function __construct(OwnersRepository $o_rep, AnimalsRepository $an_rep) 
		{		
			$this->an_rep = $an_rep;	
			$this->o_rep = $o_rep;		
			$this->template = env('THEME').'.owner.animalp';	
		}
	public function index()
		{
			$this->title = 'Данные о питомцах';
			$persons = $this->getOwners();
		
			$owner=$persons->id;
			$collection = $this->getAnimals();
			$animals = $collection->where('o_id','=',$owner);
			$this->content = view(env('THEME').'.owner.animalp_content')->with(['persons' => $persons,'animals' => $animals,'owner' => $owner])->render();
			return $this->renderOutput();     
		}
	public function getOwners()
		{
			$person = Auth::guard('web_owner')->user();		
			return $person;
		}
	public function getAnimals($take = FALSE,$paginate = TRUE)
		{       
		$animals = $this->an_rep->get('*',$take,$paginate);		
		return $animals;
		}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $animals = $this->getAnimals();
		$this->title = "Добавление нового животного";
		
		$this->content = view(env('THEME').'.owner.animalp_create_content')->render();
			
		return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
       $animal = Animal::where('chip', $chip)->first();
		  
		$animal->image = json_decode($animal->image);
	
		$this->title = 'Реадактирование карты животного - '. $animal->title;
		$this->content = view(env('THEME').'.owner.animalp_create_content')->with(['animal' => $animal])->render();
			
			return $this->renderOutput();
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
