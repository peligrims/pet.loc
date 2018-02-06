<?php

namespace Corp\Repositories;

use Corp\Animal;


class AnimalsRepository extends Repository {
	
	
	public function __construct(Animal $animals) {
		$this->model = $animals;
	}
	
	
	
public function addArticle($request) {

		
	}
}
?>