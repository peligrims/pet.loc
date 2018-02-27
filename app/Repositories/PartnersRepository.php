<?php

namespace Corp\Repositories;

use Corp\Partner;

class PartnersRepository extends Repository {
	
	public function __construct(Partner $partner) {
		$this->model = $partner;
	}
	
	public function one($alias,$attr = array()) {
		$partner = parent::one($alias,$attr);
		
		if($partner && $partner->img) {
			$partner->img = json_decode($partner->img);
		}
		
		return $partner;
	}
	
	
	public function addPartner($request) {

	$data = $request->all();
	
	
	$partner = new Partner;
	$partner->title     = $request['title'];
	$partner->text      = $request['text'];
	$partner->url 		= $request['url'];
	if($request->hasFile('img')) {
			$img = $request->file('img');
			
			if($img->isValid()) {
			$str = str_random(8); 
			$obj = new \stdClass;
			$obj->mini = $str.'_mini.jpg';
			$obj->max = $str.'_max.jpg';
			$obj->path = $str.'.jpg';
			$img = Image::make($img);
			$img->fit(Config::get('settings.image')['width'],Config::get('settings.image')['height'])->save(public_path().'/'.env('THEME').'/images/partners/'.$obj->path); 
			$img->fit(Config::get('settings.articles_img')['max']['width'],Config::get('settings.articles_img')['max']['height'])->save(public_path().'/'.env('THEME').'/images/partners/'.$obj->max); 		
			$img->fit(Config::get('settings.articles_img')['mini']['width'],Config::get('settings.articles_img')['mini']['height'])->save(public_path().'/'.env('THEME').'/images/partners/'.$obj->mini); 		
			$data['img'] = json_encode($obj);
			$this->model->fill($data);	
			$partner->img      = $data['img'];
			$partner->save();
			return ['status' => 'Партнер Добавлен'];
			
			}
		}
	}
	public function deletePartners($id) {
	
		$id->delete();
		
		if($id->delete()) {
			return ['status' => 'Партнер удален'];	
		}
	
	}

	
}

?>