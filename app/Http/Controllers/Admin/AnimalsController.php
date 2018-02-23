<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\AnimalsRepository;
use Corp\Repositories\ClinicsRepository;
use Corp\Animal;
use Corp\Clinic;

class AnimalsController extends AdminController
{
    
     public function __construct(AnimalsRepository $an_rep, ClinicsRepository $cl_rep) {
		
		//parent::__construct();
		
		/* if(Gate::denies('VIEW_ADMIN_ARTICLES')) {
			//abort(403);
		} */
		
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
        $clinics = $this->getClinics();
		//$clinics=$animals->clinics;
        $this->content = view(env('THEME').'.admin.animals_content')->with(['animals' => $animals,'clinics' => $clinics])->render();
     
      
        return $this->renderOutput(); 
        
        
    }
    
    
     public function getAnimals($take = FALSE,$paginate = TRUE)
    {
       
		$animals = $this->an_rep->get('*',$take,$paginate);
		 if($animals) {
			$animals->load('clinics');
		
		
		
		} 
		return $animals;
	}
	
	 public function getClinics($take = FALSE,$paginate = TRUE)
    {
       
		$clinics = $this->cl_rep->get('*',$take,$paginate);
		/* if($animals) {
			$animals->load('clinics');
		
		
		
		} */ 
		return $clinics;
	}
	
	
	
	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		
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
    public function store(ArticleRequest $request)
    {
        //
		$result = $this->a_rep->addArticle($request);
		
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
    public function update(ArticleRequest $request,$alias)
    {
       $article = Article::where('alias', $alias)->first();
	   $result = $this->a_rep->updateArticle($request, $article);
		
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
