<?php

namespace Corp\Http\Controllers\Owner;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\OwnersRepository;
use Corp\Repositories\AnimalsRepository;
use Corp\Owner;
use Corp\Animal;
use Illuminate\Support\Facades\Auth;



class OwnerpController extends LkController
{
     public function __construct(OwnersRepository $o_rep, AnimalsRepository $an_rep) 
		{		
			$this->an_rep = $an_rep;	
			$this->o_rep = $o_rep;		
			$this->template = env('THEME').'.owner.ownerp';	
		}
    public function index()
		{

			$this->title = 'Мои данные';
			$ownerp = $this->getOwners();

			$this->content = view(env('THEME').'.owner.ownerp_content')->with(['ownerp' => $ownerp])->render();
			return $this->renderOutput();     

			}
	public function getOwners()
		{
			$ownerp = Auth::guard('web_owner')->user();		
			return $ownerp;
		}
	public function getAnimals($take = FALSE,$paginate = TRUE)
		{       
		$animals = $this->an_rep->get('*',$take,$paginate);		
		return $animals;
		}
		
    public function create()
		{
		$owner = $this->getOwners();
		$this->title = "Добавление персональных данных";
		
		$this->content = view(env('THEME').'.owner.ownerp_create_content')->render();
			
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
        $ownerp = Owner::where('id', $id)->first();
		  
		$ownerp->image = json_decode($ownerp->image);
	
		$this->title = 'Редактирование личных даных - '. $ownerp->title;
		$this->content = view(env('THEME').'.owner.ownerp_create_content')->with(['ownerp' => $ownerp])->render();
			
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
        //
    }
}
