<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

use Corp\Http\Requests;

use Corp\Repositories\SlidersRepository;
use Corp\Repositories\PortfoliosRepository;
use Corp\Repositories\PartnersRepository;
use Corp\Repositories\AnimalsRepository;
use Corp\Repositories\ArticlesRepository;
use Corp\Animal;
use DB;


use Config;

class IndexController extends SiteController
{
    
    public function __construct(SlidersRepository $s_rep, PartnersRepository $pa_rep, ArticlesRepository $a_rep, AnimalsRepository $an_rep) {
    	
    	parent::__construct(new \Corp\Repositories\MenusRepository(new \Corp\Menu));
    	
    	$this->s_rep = $s_rep;
    	$this->pa_rep = $pa_rep;
    	$this->a_rep = $a_rep;
		$this->an_rep = $an_rep;
    	
    	$this->bar = 'right';
    	
    	$this->template = env('THEME').'.index';
		
	}
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $partners = $this->getPartner();
        
        $content = view(env('THEME').'.content')->with('partners',$partners)->render();
        $this->vars = array_add($this->vars,'content', $content);
        
        $sliderItems = $this->getSliders();
        
        $sliders = view(env('THEME').'.slider')->with('sliders',$sliderItems)->render();
        $this->vars = array_add($this->vars,'sliders',$sliders);
        
        $this->keywords = 'Чипирование животных';
		$this->meta_desc = 'Чипирование животных';
		$this->title = 'Чипирование животных';
		
     		
		$animals = $this->getAnimals();
		
		
		
		$this->contentRightBar = view(env('THEME').'.indexBar')->with(['animals' => $animals])->render();
        
		        
        return $this->renderOutput();
    }
    
    protected function getAnimals() {
		
		$animals=Animal::select(['id','chip','date_server','nick','clinic','o_name','image'])->limit(3)->get();
 		
    	return $animals;
    }
	
	protected function getPartner() {
		
		$partner = $this->pa_rep->get('*',Config::get('settings.home_port_count'));
		
		return $partner;
		
	}
	
	
    
    protected function getPortfolio() {
		
		$portfolio = $this->p_rep->get('*',Config::get('settings.home_port_count'));
		
		return $portfolio;
		
	}
    
    public function getSliders() {
    	$sliders = $this->s_rep->get();
    	
    	if($sliders->isEmpty()) {
			return FALSE;
		}
		
		$sliders->transform(function($item,$key) {
			
			$item->img = Config::get('settings.slider_path').'/'.$item->img;
			return $item;
			
		});
    	
    	
    	return $sliders;
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
   public function show() {
		
		
		$animal = $this->a_rep->addAnimals;
		
		$animals = $this->getAnimals(config('settings.other_animals'), FALSE);
		

		
		
		
		$content = view(env('THEME').'.animals_content')->with(['animal' => $animal,'animals' => $animals])->render();
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
