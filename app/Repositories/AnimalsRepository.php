<?php

namespace Corp\Repositories;

use Corp\Animal;


class AnimalsRepository extends Repository {
	
	
	public function __construct(Animal $animals) {
		$this->model = $animals;
	
	
	}
	
	
	
public function addAnimals() {

	$animals->image = json_decode($animals->image);	
	}
public function deleteAnimals($animal) {
		
		
		
		$animal->delete();
		
		if($animal->delete()) {
			return ['status' => 'Животное удалено'];	
		}
	}
	
	
	
	
	
	}
?>