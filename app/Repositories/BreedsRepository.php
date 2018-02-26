<?php

namespace Corp\Repositories;

use Corp\Breed;

class BreedsRepository extends Repository {
	
	public function __construct(Breed $breeds) {
		$this->model = $breeds;
	}
	public function addBreeds() {

	$breeds->image = json_decode($breeds->image);	
	}
public function deleteBreeds($breed) {
		
		
		
		$breed->delete();
		
		if($breed->delete()) {
			return ['status' => 'Порода удалена'];	
		}
	}

}

?>