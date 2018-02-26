<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;

use Corp\Repositories\AnimalsRepository;
use Corp\Repositories\ClinicsRepository;
use Corp\Animal;
use Auth;
use Gate;
use Menu;

class LkController extends AdminController
{
		 public function __construct(AnimalsRepository $an_rep) {
		
		$this->an_rep = $an_rep;
		
		$this->template = env('THEME').'.admin.lkanimals';
		
		}
				
		
	
	
   
   
   
    public function index()
    {
        $this->title = 'Зарегистрированные животные';
        
        $animals = $this->getAnimals();
   
		
        $this->content = view(env('THEME').'.admin.lkanimals_content')->with(['animals' => $animals])->render();
     
      
        return $this->renderOutput(); 
        
    }
	public function getAnimals($take = FALSE,$paginate = TRUE) {
		
		$animals = $this->an_rep->get('*',$take,$paginate);
		
		$animals->load('kinds','clinics','breeds');
		
		return $animals;
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->title = "Добавление нового питомца";
		
		$this->content = view(env('THEME').'.admin.lkanimals_create_content')->render();
		
		return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(AnimalRequest $request)
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::where('chip', $chip)->first();
		  
		$animal->image = json_decode($animal->image);
		
		
		
		
		$this->title = 'Реадактирование карты питомца - '. $animal->title;
		$this->content = view(env('THEME').'.admin.lkanimal_create_content')->with(['animal' => $animal])->render();
			
			return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $animal = Animal::where('id', $id)->first();
        $result = $this->an_rep->deleteAnimals($animal);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
        
        
    }
}
