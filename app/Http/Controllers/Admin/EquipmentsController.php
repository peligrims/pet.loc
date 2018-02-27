<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\EquipmentsRepository;
use Corp\Http\Request\EquipmentRequest;
use Corp\Equipment;
use Image;
use Config;
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
	
	
	
	
    public function create(Request $request)
    {
       $this->title = "Добавление нового оборудования";
		
		$this->content = view(env('THEME').'.admin.equipment_create_content')->render();
		
		
		if(is_array($request) && !empty($request['error'])) {
		return back()->with($request);
		}
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
		$result = $this->e_rep->addEquipment($request);
		
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
        $equipment = Equipment::where('id', $id)->first();
		  
		$equipment->img = json_decode($equipment->img);
		
		$this->title = 'Реадактирование карточки оборудования - '. $equipment->title;
		$this->content = view(env('THEME').'.admin.equipment_create_content')->with(['equipment' => $equipment])->render();
			
			return $this->renderOutput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
	public function update(Request $request,$id)
    {
       
	   $equipment = Equipment::where('id', $id)->first();
	   $result = $this->e_rep->updateEquipment($request,$equipment);
		
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
		$equipment = Equipment::where('id', $id)->first();
        $result = $this->e_rep->deleteEquipment($equipment);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
        
    }
}
