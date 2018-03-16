<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

use Corp\Http\Requests;

use Corp\Repositories\InformationsRepository;


class InformationController extends SiteController
{
    public function __construct(InformationsRepository $i_rep) {
    	
    	parent::__construct(new \Corp\Repositories\MenusRepository(new \Corp\Menu));
    	
    	$this->i_rep = $i_rep;

    	$this->template = env('THEME').'.informations';
		
	}
    public function index()
    {
        //
        
        $this->title = 'Новости';
		$this->keywords = 'Новости';
		$this->meta_desc = 'Новости';
		
		$informations = $this->getInformations();
		
        $content = view(env('THEME').'.informations_content')->with('informations',$informations)->render();
        $this->vars = array_add($this->vars,'content',$content);
        
      
        return $this->renderOutput();
    }
	
	public function getInformations($take = FALSE,$paginate = TRUE) {
		
		$informations = $this->i_rep->get('*',$take,$paginate);
		
		
		
		return $informations;
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
    public function show($alias) {
		
		
		$information = $this->i_rep->one($alias);
		$informations= $this->getInformations(config('settings.other_informations'), FALSE);
		

		
		$this->title = $information->title;
		//$this->keywords = $information->keywords;
		//$this->meta_desc = $information->meta_desc;
		
		$content = view(env('THEME').'.portfolio_content')->with(['information' => $information,'informations' => $informations])->render();
		$this->vars = array_add($this->vars,'content',$content);

        
		return $this->renderOutput();
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
