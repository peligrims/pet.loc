<?php

namespace Corp\Repositories;

use Corp\Partner;

class PartnersRepository extends Repository {
	
	public function __construct(Partner $partner) {
		$this->model = $partner;
	}
	
	public function one($alias,$attr = array()) {
		$partner = parent::one($alias,$attr);
		
		if($partner && $partner->img) {
			$partner->img = json_decode($partner->img);
		}
		
		return $partner;
	}
	
}

?>