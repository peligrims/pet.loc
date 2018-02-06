<?php

namespace Corp\Repositories;

use Corp\Clinic;

class ClinicsRepository extends Repository {
	
	
	public function __construct(Clinic $clinic) {
		$this->model = $clinic;
		
	}
		
}

?>