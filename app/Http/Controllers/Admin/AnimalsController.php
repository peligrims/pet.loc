<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;
use Corp\Repositories\AnimalsRepository;
use Corp\Animal;
use Corp\Clinic;

class AnimalsController extends Controller
{
    
     public function __construct(AnimalsRepository $a_rep) {
		
		//parent::__construct();
		
		/* if(Gate::denies('VIEW_ADMIN_ARTICLES')) {
			//abort(403);
		} */
		
		$this->a_rep = $a_rep;
		
		
		$this->template = env('THEME').'.admin.animals';
		
	}
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
			
		
		
        $this->title = 'Зарегистрированные животные';
        
        $animals = $this->getAnimals();
		  
        $this->content = view(env('THEME').'.admin.animals_content')->with('animals',$animals)->render();
       
      
        return $this->renderOutput(); 
        
        
    }
    
    
     public function getAnimals()
    {
       
        
        
      
		$animals = $this->a_rep->get(['id','clinic','chip','nick','kind','breed','sex','birthday'],$take,$paginate);
		if($animals) {
			$animals->load('clinic');
		} 
		
		return $animals;



		
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		/* if(Gate::denies('save', new \Corp\Article)) {
			abort(403);
		}
		
		$this->title = "Добавление нового животного";
		
		$categories = Category::select(['title','alias','parent_id','id'])->get();
		
		$lists = array();
		
		foreach($categories as $category) {
			if($category->parent_id == 0) {
				$lists[$category->title] = array();
			}
			else {
				$lists[$categories->where('id',$category->parent_id)->first()->title][$category->id] = $category->title;    
			}
		}
		
		$this->content = view(env('THEME').'.admin.articles_create_content')->with('categories', $lists)->render();
		
		return $this->renderOutput(); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //
		$result = $this->a_rep->addArticle($request);
		
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
     * @param  int  $alias
     * @return \Illuminate\Http\Response
     */
    public function edit($alias)
    {
        //dd($article);
		
		
		//
        $article = Article::where('alias', $alias)->first();
		  // dd($article);
        if(Gate::denies('edit', new Article)) {
			abort(403);
		}
			
		
		$categories = Category::select(['title','alias','parent_id','id'])->get();
		
		
		$article->img = json_decode($article->img);
		
		$lists = array();
		
		foreach($categories as $category) {
			if($category->parent_id == 0) {
				$lists[$category->title] = array();
			}
			else {
				$lists[$categories->where('id',$category->parent_id)->first()->title][$category->id] = $category->title;    
				}
			}
		$this->title = 'Реадактирование материала - '. $article->title;
		$this->content = view(env('THEME').'.admin.articles_create_content')->with(['categories' =>$lists, 'article' => $article])->render();
			
			return $this->renderOutput();
		
	
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     //   articles -> Article  
    public function update(ArticleRequest $request,$alias)
    {
       $article = Article::where('alias', $alias)->first();
	   $result = $this->a_rep->updateArticle($request, $article);
		
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
   public function destroy($alias)
    {
        //
        $article = Article::where('alias', $alias)->first();
        $result = $this->a_rep->deleteArticle($article);
		
		if(is_array($result) && !empty($result['error'])) {
			return back()->with($result);
		}
		
		return redirect('/admin')->with($result);
        
        
    }
}
