<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

use Corp\Http\Requests;
use Corp\Repositories\AnimalsRepository;
use Corp\Repositories\PortfoliosRepository;
use Corp\Repositories\ArticlesRepository;
use Corp\Repositories\CommentsRepository;
use Corp\Repositories\OwnersRepository;


use Corp\Animal;
use Corp\Clinic;
use Corp\Category;
use Corp\Owner;

use Config;
use DB;


class AnimalsController extends SiteController
{
    
	public function __construct(OwnersRepository $o_rep, AnimalsRepository $an_rep,PortfoliosRepository $p_rep, ArticlesRepository $a_rep, CommentsRepository $c_rep) {
    	
    	parent::__construct(new \Corp\Repositories\MenusRepository(new \Corp\Menu));
    	
    	$this->o_rep = $o_rep;
    	$this->p_rep = $p_rep;
    	$this->a_rep = $a_rep;
    	$this->an_rep = $an_rep;
    	$this->c_rep = $c_rep;

    	$this->template = env('THEME').'.animals';
		
	}
	
	
	
    public function index()
    {
       
		
		$this->title = 'animals';
		$this->keywords = 'animals';
		$this->meta_desc = 'animals';
		
		$animals = $this->getAnimal();
	
        $content = view(env('THEME').'.animals_content')->with('animals',$animals)->render();
        $this->vars = array_add($this->vars,'content',$content);
        
		//$comments = $this->getComments(config('settings.recent_comments'));
       // $portfolios = $this->getPortfolios(config('settings.recent_portfolios'));
		$this->contentRightBar = view(env('THEME').'.animalsBar');
         
        return $this->renderOutput();
    }
	
	 public function getComments($take) {
		
		$comments = $this->c_rep->get(['text','name','email','site','article_id','user_id'],$take);
		
		if($comments) {
			$comments->load('article','user');
		}
		
		return $comments;
	}
	
	public function getPortfolios($take) {
		$portfolios = $this->p_rep->get(['title','text','alias','customer','img','filter_alias'],$take);
		return $portfolios;
	}
	
	public function getAnimal($take = FALSE,$paginate = TRUE) {
		
		$animals = $this->an_rep->get('*',$take,$paginate);
		
		//$animals->load('kinds','clinics','breeds');
		
		return $animals;
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
    public function show($chip)
    {
        $animal = $this->an_rep->one($chip);
		//$owner = $this->o_rep->get(['id','name','nick','email','phone1'],Config::get('settings.recent_owner'));
		$ownerid =$animal->o_id;
		$owner = DB::table('owners')->where('id',$ownerid)->first();
		
		
		if($animal) {
			$animal->image = json_decode($animal->image);
		}
		/* if(isset($animals->id)) {
			$this->title = $article->title;
			$this->keywords = $article->keywords;
			$this->meta_desc = $article->meta_desc;
		} */
		
		$content = view(env('THEME').'.animal_content')->with(['animal'=> $animal,'owner' => $owner])->render();
		$this->vars = array_add($this->vars,'content',$content);
		
		
		//$comments = $this->getComments(config('settings.recent_comments'));
        //$portfolios = $this->getPortfolios(config('settings.recent_portfolios'));

        
        $this->contentRightBar = view(env('THEME').'.animalsBar');
		
		
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
