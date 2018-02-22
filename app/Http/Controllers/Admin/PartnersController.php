<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\PartnersRepository;
use Corp\Partner;

class PartnersController extends AdminController
{
    public function __construct(PartnersRepository $p_rep) {
		
		//parent::__construct();
		
		/* if(Gate::denies('VIEW_ADMIN_ARTICLES')) {
			//abort(403);
		} */
		
		$this->p_rep = $p_rep;
		
		
		$this->template = env('THEME').'.admin.partners';
		
	}
	
	
	
    public function index()
    {
         $this->title = 'Партнеры проекта';
        
        $partners = $this->getPartners();
	
        $this->content = view(env('THEME').'.admin.partners_content')->with('partners',$partners)->render();
     
      
        return $this->renderOutput(); 
    }

     public function getPartners($take = FALSE,$paginate = TRUE)
    {
       
		$partners = $this->p_rep->get('*',$take,$paginate);
		/* if($animals) {
			$animals->load('clinics');
		
		
		
		} */
		return $partners;
	}
	
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
    }
}
