<?php

namespace Corp\Repositories;

use Corp\Animal;
use Image;
use Config;


class AnimalsRepository extends Repository {
	
	
	 public function __construct(Animal $animals) {
		$this->model = $animals;
	
	
	}
	
	public function addAnimal($request) {

	$data = $request->except('_token');
		
		$animal = new Animal;
		$animal->chip    = $request['chip'];
		$animal->nick    = $request['nick'];
		$animal->clinic    = $request['clinic'];
		$animal->kind    = $request['kind'];
		$animal->breed   = $request['breed'];
		$animal->color   = $request['color'];
		$animal->sex 	 = $request['sex'];
		$animal->birthday  = $request['birthday'];
	
	if($request->hasFile('image')) {
		$image = $request->file('image');
		if($image->isValid()) {
		$str = str_random(8); 
		$obj = new \stdClass;
		$obj->mini = $str.'_mini.jpg';
		$obj->max = $str.'_max.jpg';
		$obj->path = $str.'.jpg';
		$image = Image::make($image);
		$image->fit(Config::get('settings.image')['width'],Config::get('settings.image')['height'])->save(public_path().'/'.env('THEME').'/images/animals/'.$obj->path); 
		$image->fit(Config::get('settings.articles_img')['max']['width'],Config::get('settings.articles_img')['max']['height'])->save(public_path().'/'.env('THEME').'/images/animals/'.$obj->max); 		
		$image->fit(Config::get('settings.articles_img')['mini']['width'],Config::get('settings.articles_img')['mini']['height'])->save(public_path().'/'.env('THEME').'/images/animals/'.$obj->mini); 		

		
		
		
		$data['image'] = json_encode($obj);
		$this->model->fill($data);	
		$animal->image      = $data['image'];
		$animal->save();
		return ['status' => 'Животное добавлен'];
		
			}
			
		} 
	
		
	}
	public function updateAnimal($request,$animals) {

		$data = $request->all();
		$animal = new Animal;
	
		$animal->chip    = $request['chip'];
		$animal->nick    = $request['nick'];
		$animal->clinic    = $request['clinic'];
		$animal->kind    = $request['kind'];
		$animal->breed   = $request['breed'];
		$animal->color   = $request['color'];
		$animal->sex  = $request['sex'];
		$animal->birthday  = $request['birthday'];
		
		$animal->save();
		return ['status' => 'Животное обновлено'];
		
	}
	public function deleteAnimal($chip) {
		
		$chip->delete();
		return ['status' => 'Животное удалено'];
		
	}
	
}
?>