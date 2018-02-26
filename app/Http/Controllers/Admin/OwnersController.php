<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\OwnersRepository;
use Corp\Http\Requests\OwnerRequest;
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
        $this->title = "Добавление нового владельца";
		
		$this->content = view(env('THEME').'.admin.owner_create_content')->render();
		
		return $this->renderOutput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerRequest $request)
    {
       $result = $this->o_rep->addOwner($request);
		
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
        $owner = Owner::where('id', $id)->first();
		  
		
		
		$this->title = 'Реадактирование карты владельца - '. $owner->title;
		$this->content = view(env('THEME').'.admin.owner_create_content')->with(['owner' => $owner])->render();
			
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
        //
    }
    public function update(OwnerRequest $request,$id)
    {
       $owner = Owner::where('id', $id)->first();
	   $result = $this->o_rep->updateOwner($request, $owner);
		
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
		$owner = Owner::where('id', $id)->first();
        $result = $this->o_rep->deleteOwners($owner);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
    }
}
