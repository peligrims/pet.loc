<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

use Corp\Http\Requests;

use Corp\Repositories\NewsRepository;

class NewController extends SiteController
{
    //
    
    public function __construct(NewsRepository $n_rep) {
    	
    	parent::__construct(new \Corp\Repositories\MenusRepository(new \Corp\Menu));
    	
    	$this->p_rep = $n_rep;

    	$this->template = env('THEME').'.news';
		
	}
	
	public function index()
    {
        //
        
        $this->title = 'Новости';
		$this->keywords = 'Новости';
		$this->meta_desc = 'Новости';
		
		$news = $this->getNews();
		//dd($news);
        $content = view(env('THEME').'.news_content')->with('news',$news)->render();
        $this->vars = array_add($this->vars,'content',$content);
        
         
        return $this->renderOutput();
    }
    
    public function getNews($take = FALSE,$paginate = TRUE) {
		
		$news = $this->n_rep->get('*',$take,$paginate);
		dd($news);
		
		return $news;
	}
	
	public function show($alias) {
		
		
		$new = $this->n_rep->one($alias);
		$news = $this->getNews(config('settings.other_news'), FALSE);
		

		
		$this->title = $news->title;
		$this->keywords = $news->keywords;
		$this->meta_desc = $news->meta_desc;
		
		$content = view(env('THEME').'.new_content')->with(['new' => $new,'news' => $news])->render();
		$this->vars = array_add($this->vars,'content',$content);

        
		return $this->renderOutput();
	}
	
	
}
