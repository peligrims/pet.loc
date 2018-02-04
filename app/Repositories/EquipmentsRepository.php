<?php

namespace Corp\Repositories;

use Corp\Equipment;

class EquipmentsRepository extends Repository {
	
	public function __construct(Equipment $equipment) {
		$this->model = $equipment;
	}
	
	public function one($alias,$attr = array()) {
		$equipment = parent::one($alias,$attr);
		
		if($equipment && $equipment->img) {
			//$equipment>img = json_decode($equipment->img);
		}
		
		return $equipment;
	}
	
}

?>