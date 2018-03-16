<?php

namespace Corp\Repositories;

use Corp\Information;
use Image;
use Config;

class InformationsRepository extends Repository {
	
	
	public function __construct(Information $information) {
		$this->model = $information;
	}
	
public function one($alias,$attr = array()) {
		$information = parent::one($alias,$attr);
		
		if($information && $information->img) {
			$information->img = json_decode($information->img);
		}
		
		return $information;
	}
public function deleteInformation($id) {
		
		$id->delete();
		
		if($id->delete()) {
			
		}
		return ['status' => 'Новость удалена'];	
	}
public function updateInformation($request,$id ) {

		$data = $request->except('_token');
	
		$information = new Information;
	
		$information->title     = $data['title'];
		$information->text      = $data['text'];
		$information->url      = $data['url'];
	
	if($request->hasFile('image')) {
		$image = $request->file('image');
		
		if($image->isValid()) {
		$str = str_random(8); 
		$obj = new \stdClass;
		$obj->mini = $str.'_mini.jpg';
		$obj->max = $str.'_max.jpg';
		$obj->path = $str.'.jpg';
		$image = Image::make($image);
		$image->fit(Config::get('settings.image')['width'],Config::get('settings.image')['height'])->save(public_path().'/'.env('THEME').'/images/projects/'.$obj->path); 
		$image->fit(Config::get('settings.articles_img')['max']['width'],Config::get('settings.informations_image')['max']['height'])->save(public_path().'/'.env('THEME').'/images/projects/'.$obj->max); 		
		$image->fit(Config::get('settings.articles_img')['mini']['width'],Config::get('settings.informations_image')['mini']['height'])->save(public_path().'/'.env('THEME').'/images/projects/'.$obj->mini); 		
		$data['image'] = json_encode($obj);	
				
		$information->image  = $data['image'];		
		$id->delete();
		$information->save();
		
		return ['status' => 'Новость обновлено'];
		
			}
			
		} 
					
	}
	
public function addInformations($request) {

	$data = $request->except('_token');
	
		$information = new Information;
	
		$information->title     = $data['title'];
		$information->text      = $data['text'];
		$information->url      = $data['url'];
		
	
	
	
	if($request->hasFile('image')) {
		$image = $request->file('image');
		
		if($image->isValid()) {
		$str = str_random(8); 
		$obj = new \stdClass;
		$obj->mini = $str.'_mini.jpg';
		$obj->max = $str.'_max.jpg';
		$obj->path = $str.'.jpg';
		$image = Image::make($image);
		$image->fit(Config::get('settings.image')['width'],Config::get('settings.image')['height'])->save(public_path().'/'.env('THEME').'/images/projects/'.$obj->path); 
		$image->fit(Config::get('settings.articles_img')['max']['width'],Config::get('settings.informations_image')['max']['height'])->save(public_path().'/'.env('THEME').'/images/projects/'.$obj->max); 		
		$image->fit(Config::get('settings.articles_img')['mini']['width'],Config::get('settings.informations_image')['mini']['height'])->save(public_path().'/'.env('THEME').'/images/projects/'.$obj->mini); 		
		$data['image'] = json_encode($obj);
		
		
		$this->model->fill($data);	
		$information->image     = $data['image'];
		$information->save();
		return ['status' => 'Новость создана'];
		
			}
			
		} 
	
		
	}

	
}

?>