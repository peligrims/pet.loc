<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\InformationsRepository;
use Corp\Information;
use Corp\Http\Requests\InformationRequest; 
use Image;
use Config;
	 
class InformationsController extends AdminController
{
    public function __construct(InformationsRepository $i_rep) {
		
		//parent::__construct();
		
		/* if(Gate::denies('VIEW_ADMIN_ARTICLES')) {
			//abort(403);
		} */
		
		$this->i_rep = $i_rep;
		
		
		$this->template = env('THEME').'.admin.informations';
		
	}
	
	
	
    public function index()
    {
         $this->title = 'Новости';
        
        $informations = $this->getInformations();
	
        $this->content = view(env('THEME').'.admin.informations_content')->with('informations',$informations)->render();
     
      
        return $this->renderOutput(); 
    }

     public function getInformations($take = FALSE,$paginate = TRUE)
    {
       
		$informations = $this->i_rep->get('*',$take,$paginate);
		
		return $informations;
	}
	
    public function create()
    {
       $this->title = "Добавление новой новости";
		
		$this->content = view(env('THEME').'.admin.informations_create_content')->render();
		
		return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InformationRequest $request)
    {
       $result = $this->i_rep->addInformations($request);
		
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
        $information = Information::where('id', $id)->first();
		
		$information->img = json_decode($information->img);
		
		$this->title = 'Редактирование новостей - '. $information->title;
	
		
		$this->content = view(env('THEME').'.admin.informations_create_content')->with(['information' => $information])->render();
			
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
		
		$information = Information::where('id', $id)->first();
		
		$result = $this->i_rep->updateInformation($request,$information);
		
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
        $information = Information::where('id', $id)->first();
        $result = $this->i_rep->deleteInformation($information);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
    }
}
