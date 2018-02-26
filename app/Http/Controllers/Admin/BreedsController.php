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
        //
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
        //
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
        $breed = Breed::where('id', $id)->first();
        $result = $this->b_rep->deleteBreeds($breed);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
        
        
    }
}
