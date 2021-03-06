<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\ClinicsRepository;
use Corp\Animal;
use Corp\Clinic;

class ClinicsController extends AdminController
{
    public function __construct(ClinicsRepository $c_rep) {
		
		//parent::__construct();
		
		/* if(Gate::denies('VIEW_ADMIN_ARTICLES')) {
			//abort(403);
		} */
		
		$this->c_rep = $c_rep;
		
		
		$this->template = env('THEME').'.admin.clinics';
		
	}
    public function index()
    {
        $this->title = 'Клиники для чипирования';
        
        $clinics = $this->getClinics();
	
        $this->content = view(env('THEME').'.admin.clinics_content')->with('clinics',$clinics)->render();
     
      
        return $this->renderOutput(); 
    }

    public function getClinics($take = FALSE,$paginate = TRUE)
	
	{
       
		$clinics = $this->c_rep->get('*',$take,$paginate);
		
		return $clinics;
	}
	 
	 
    public function create()
    {
        $this->title = "Добавление новой клиники";
		
		$this->content = view(env('THEME').'.admin.clinic_create_content')->render();
		
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
        $result = $this->c_rep->addClinic($request);
		
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
		$clinic = Clinic::where('id', $id)->first();
			
		$this->title = 'Реадактирование карты клиники - '. $clinic->title;
		$this->content = view(env('THEME').'.admin.clinic_create_content')->with(['clinic' => $clinic])->render();
			
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
       $clinic  = Clinic::where('id', $id)->first();
	    $result = $this->c_rep->updateClinic($request,$clinic);
		
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
       $clinic=Clinic::where('id', $id)->first();
        
		$result = $this->c_rep->deleteClinic($clinic);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
    }
}
