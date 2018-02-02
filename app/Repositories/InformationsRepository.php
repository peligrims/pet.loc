<?php

namespace Corp\Repositories;

use Corp\Information;

class InformationsRepository extends Repository {
	
	
	public function __construct(Information $information) {
		$this->model = $information;
	}
	
	public function one($alias,$attr = array()) {
		$information = parent::one($alias,$attr);
		
		if($information && $information->img) {
			$information->img = json_decode($information->img);
		}
		
		return $information;
	}
	
}

?>