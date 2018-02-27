<?php

namespace Corp\Repositories;

use Corp\Breed;

class BreedsRepository extends Repository {
	
	public function __construct(Breed $breeds) {
		$this->model = $breeds;
	}
	
	public function addBreed($request) {

		$data = $request->all();
		
		$breed = new Breed;
		$breed->title     = $request['title'];
		$breed->kind     = $request['kind'];
	
		$breed->save();
		return ['status' => 'Порода добавлена'];
		
	}
	public function updateBreed($request,$breeds) {

		$data = $request->all();
		$breed = new Breed;
	
		$breed->title     = $data['title'];
		
		$breed->save();
		return ['status' => 'Порода обновлено'];
		
	}
	public function deleteBreed($breed) {
		
		$breed->delete();
		return ['status' => 'Порода удалена'];
		
	}
}

?>