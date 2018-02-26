<?php

namespace Corp\Repositories;

use Corp\Clinic;

class ClinicsRepository extends Repository {
	
	
	public function __construct(Clinic $clinic) {
		$this->model = $clinic;
		
	}
	public function addClinics() {

	$clinics->image = json_decode($animals->image);	
	}
public function deleteClinics($clinic) {
		
		
		
		$clinic->delete();
		
		if($clinic->delete()) {
			return ['status' => 'Животное удалено'];	
		}
	}
		
}

?>