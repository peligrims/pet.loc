<?php

namespace Corp\Repositories;

use Corp\Equipment;

use Image;
use Config;

class EquipmentsRepository extends Repository {
	
public function __construct(Equipment $equipment) {
		$this->model = $equipment;
	}
	
	
public function deleteEquipment($id) {
		
		$id->delete();
		
		if($id->delete()) {
			return ['status' => 'Оборудование удалено'];	
		}
	}
public function updateEquipment($request,$equipment) 
		
		
		{

		$data = $request->all();
	
	
		$equipment = new Equipment;
	
		$equipment->title     = $data['title'];
		$equipment->text      = $data['text'];
	
	
	
	
	if($request->hasFile('img')) {
		$img = $request->file('img');
		
		if($img->isValid()) {
		$str = str_random(8); 
		$obj = new \stdClass;
		$obj->mini = $str.'_mini.jpg';
		$obj->max = $str.'_max.jpg';
		$obj->path = $str.'.jpg';
		$img = Image::make($img);
		$img->fit(Config::get('settings.image')['width'],Config::get('settings.image')['height'])->save(public_path().'/'.env('THEME').'/images/equipment/'.$obj->path); 
		$img->fit(Config::get('settings.articles_img')['max']['width'],Config::get('settings.articles_img')['max']['height'])->save(public_path().'/'.env('THEME').'/images/equipment/'.$obj->max); 		
		$img->fit(Config::get('settings.articles_img')['mini']['width'],Config::get('settings.articles_img')['mini']['height'])->save(public_path().'/'.env('THEME').'/images/equipment/'.$obj->mini); 		
		$data['img'] = json_encode($obj);
		$this->model->fill($data);	
		$equipment->img      = $data['img'];
		$equipment->save();
		return ['status' => 'Оборудование обновлено'];
		
			}
			
		} 
	
		
	}
		
		
	
	
public function addEquipment($request) {

	$data = $request->all();
	
	
	$equipment = new Equipment;
	
		$equipment->title     = $data['title'];
		$equipment->text      = $data['text'];
	
	
	
	
	if($request->hasFile('img')) {
		$img = $request->file('img');
		if($img->isValid()) {
		$str = str_random(8); 
		$obj = new \stdClass;
		$obj->mini = $str.'_mini.jpg';
		$obj->max = $str.'_max.jpg';
		$obj->path = $str.'.jpg';
		$img = Image::make($img);
		$img->fit(Config::get('settings.image')['width'],Config::get('settings.image')['height'])->save(public_path().'/'.env('THEME').'/images/equipment/'.$obj->path); 
		$img->fit(Config::get('settings.articles_img')['max']['width'],Config::get('settings.articles_img')['max']['height'])->save(public_path().'/'.env('THEME').'/images/equipment/'.$obj->max); 		
		$img->fit(Config::get('settings.articles_img')['mini']['width'],Config::get('settings.articles_img')['mini']['height'])->save(public_path().'/'.env('THEME').'/images/equipment/'.$obj->mini); 		
		$data['img'] = json_encode($obj);
		$this->model->fill($data);	
		$equipment->img      = $data['img'];
		$equipment->save();
		return ['status' => 'Оборудование добавлен'];
		
			}
			
		} 
	
		
	}
	
}

?>