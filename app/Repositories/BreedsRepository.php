<?php

namespace Corp\Repositories;

use Corp\Breed;

class BreedsRepository extends Repository {
	
	public function __construct(Breed $breeds) {
		$this->model = $breeds;
	}
	
}

?>