<?php

namespace Corp\Http\Controllers\Owner;

use Illuminate\Http\Request;
use Corp\Http\Requests;

use Corp\Repositories\EquipmentsRepository;

class EquipmentpController extends LkController
{
    
	 public function __construct( EquipmentsRepository $e_rep) {
    	
    	    	
    	$this->e_rep = $e_rep;
    	//dd($this->e_rep);
    	$this->bar = 'right';
    	
    	$this->template = env('THEME').'.equipments';
		
	}

	
    public function index()
    {
        $this->title = 'Оборудование';
		$this->keywords = 'Оборудование';
		$this->meta_desc = 'Оборудование';
		
		$equipments = $this->getEquipments();
		//dd($equipments);
        $content = view(env('THEME').'.equipments_content')->with('equipments',$equipments)->render();
        $this->vars = array_add($this->vars,'content',$content);
        
         
        return $this->renderOutput();
    }
	public function getEquipments($take = FALSE,$paginate = TRUE) {
		
		$equipments = $this->e_rep->get('*',$take,$paginate);
		
		
		return $equipments;
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
    }
}
