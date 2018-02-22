<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\OwnersRepository;
use Corp\Owner;


class OwnersController extends AdminController
{
	
	public function __construct(OwnersRepository $o_rep) {
		
		//parent::__construct();
		
		/* if(Gate::denies('VIEW_ADMIN_ARTICLES')) {
			//abort(403);
		} */
		
		$this->o_rep = $o_rep;
		
		
		$this->template = env('THEME').'.admin.owners';
		
	}
    public function index()
    {
        $this->title = 'Владельцы животных';
        
        $owners = $this->getOwners();
	
        $this->content = view(env('THEME').'.admin.owners_content')->with('owners',$owners)->render();
     
      
        return $this->renderOutput(); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   


	public function getOwners($take = FALSE,$paginate = TRUE)
    {
       
		$owners = $this->o_rep->get('*',$take,$paginate);
		/* if($animals) {
			$animals->load('clinics');
		
		
		
		} */
		return $owners ;
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
