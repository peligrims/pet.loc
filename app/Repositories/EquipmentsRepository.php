<?php

namespace Corp\Repositories;

use Corp\Equipment;

class EquipmentsRepository extends Repository {
	
	public function __construct(Equipment $equipment) {
		$this->model = $equipment;
	}
	
	
}

?>