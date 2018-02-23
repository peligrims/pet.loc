<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\EquipmentsRepository;

use Corp\Equipment;

class EquipmentsController extends AdminController
{
    public function __construct(EquipmentsRepository $e_rep) {
		
		//parent::__construct();
		
		/* if(Gate::denies('VIEW_ADMIN_ARTICLES')) {
			//abort(403);
		} */
		
		$this->e_rep = $e_rep;
		
		$this->template = env('THEME').'.admin.equipments';
		
		}
    public function index()
    {
       $this->title = 'Оборудование';
        
        $equipments = $this->getEquipments();
        
        $this->content = view(env('THEME').'.admin.equipments_content')->with(['equipments' => $equipments])->render();
     
      
        return $this->renderOutput(); 
    }

    public function getEquipments($take = FALSE,$paginate = TRUE)
    {
       
		$equipments = $this->e_rep->get('*',$take,$paginate);
		  
		return $equipments ;
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
