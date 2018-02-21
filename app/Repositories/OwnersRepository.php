<?php

namespace Corp\Repositories;

use Corp\Owner;

class OwnersRepository extends Repository {
	
	public function __construct(Owner $owners) {
		$this->model = $owners;
	}
	
}

?>