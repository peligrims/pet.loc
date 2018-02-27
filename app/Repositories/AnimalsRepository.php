<?php

namespace Corp\Repositories;

use Corp\Animal;


class AnimalsRepository extends Repository {
	
	
	 public function __construct(Animal $animals) {
		$this->model = $animals;
	
	
	}
	public function addAnimal($request) {

		$data = $request->all();
		
		$animal = new Animal;
		$animal->title     = $request['title'];
		$animal->kind     = $request['kind'];
	
		$animal->save();
		return ['status' => 'Животное добавлено'];
		
	}
	public function updateAnimal($request,$animals) {

		$data = $request->all();
		$animal = new Animal;
	
		$animal->title     = $data['title'];
		
		$animal->save();
		return ['status' => 'Животное обновлено'];
		
	}
	public function deleteAnimal($animal) {
		
		$animal->delete();
		return ['status' => 'Порода удалена'];
		
	}
	
}
?>