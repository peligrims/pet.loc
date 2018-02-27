<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\BreedsRepository;
use Corp\Breed;

class BreedsController extends AdminController
{
     public function __construct(BreedsRepository $b_rep) {
		
		//parent::__construct();
		
		/* if(Gate::denies('VIEW_ADMIN_ARTICLES')) {
			//abort(403);
		} */
		
		$this->b_rep = $b_rep;
		
		
		$this->template = env('THEME').'.admin.breeds';
		
		}
    public function index()
    {
         $this->title = 'Породы животных';
        
        $breeds = $this->getBreeds();
	
        $this->content = view(env('THEME').'.admin.breeds_content')->with('breeds',$breeds)->render();
     
      
        return $this->renderOutput(); 
    }
	public function getBreeds($take = FALSE,$paginate = TRUE)
    {
       
		$breeds = $this->b_rep->get('*',$take,$paginate);
		/* if($animals) {
			$animals->load('clinics');
		
		
		
		} */
		return $breeds;
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $this->title = "Добавление новой породы";
		
		$this->content = view(env('THEME').'.admin.breed_create_content')->render();
		
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
		$result = $this->b_rep->addBreed($request);
		
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
		$breed = Breed::where('id', $id)->first();
		$kind=$breed->kinds->title;   
		//dd($kind);
		
		$this->title = 'Реадактирование карты животного - '. $breed->title;
		$this->content = view(env('THEME').'.admin.breed_create_content')->with(['breed' => $breed,'kind' => $kind])->render();
			
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
        $breed = Breed::where('id', $id)->first();
	    $result = $this->b_rep->updateBreed($request,$breed);
		
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
        $breed = Breed::where('id', $id)->first();
        $result = $this->b_rep->deleteBreed($breed);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
        
        
    }
}
