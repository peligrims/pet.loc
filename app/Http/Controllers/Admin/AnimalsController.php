<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Http\Request\AnimalRequest;
use Corp\Repositories\AnimalsRepository;
use Corp\Repositories\ClinicsRepository;
use Corp\Animal;
use Corp\Clinic;
use Corp\Breed;
use Gate;

class AnimalsController extends AdminController
{
    
     public function __construct(AnimalsRepository $an_rep, ClinicsRepository $cl_rep) {
		
		parent::__construct();
		
		// if(Gate::denies('VIEW_ADMIN_ARTICLES')) {
			// abort(404);
		// } 
		
		$this->an_rep = $an_rep;
		$this->cl_rep = $cl_rep;
		
		
		
		$this->template = env('THEME').'.admin.animals';
	
		}
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
	public function index()
    {
        $this->title = 'Зарегистрированные животные';
        
        $animals = $this->getAnimals();
		
        $this->content = view(env('THEME').'.admin.animals_content')->with(['animals' => $animals])->render();
     
      
        return $this->renderOutput();     
        
    }
    
     public function getAnimals($take = FALSE,$paginate = TRUE)
    {
       
		$animals = $this->an_rep->get('*',$take,$paginate);
		
		return $animals;

	
	}
	
	
    
    public function create()
    {
		$animals = $this->getAnimals();
		$this->title = "Добавление нового животного";
		
		$this->content = view(env('THEME').'.admin.animal_create_content')->render();
			
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
		$result = $this->an_rep->addAnimal($request);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $alias
     * @return \Illuminate\Http\Response
     */
    public function edit($chip)
    {
        $animal = Animal::where('chip', $chip)->first();
		  
		$animal->image = json_decode($animal->image);
	
		$this->title = 'Реадактирование карты животного - '. $animal->title;
		$this->content = view(env('THEME').'.admin.animal_create_content')->with(['animal' => $animal])->render();
			
			return $this->renderOutput();
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     //   articles -> Article  
    public function update(Request $request,$chip)
    {
       $animal = Animal::where('chip', $chip)->first();
	   $result = $this->an_rep->updateAnimal($request, $animal);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($chip)
    {
        //
        $animal = Animal::where('chip', $chip)->first();
        $result = $this->an_rep->deleteAnimal($animal);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
        
        
    }
}
