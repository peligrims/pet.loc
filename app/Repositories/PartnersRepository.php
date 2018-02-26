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
	
	
	public function addPartner($request) {

	$data = $request->all();
	
	
	$partner = new Partner;
	$partner->title     = $request['title'];
	$partner->text      = $request['text'];
	$partner->url 		= $request['url'];
	$partner->save();
	return ['status' => 'Партнер добавлен'];
	
	}
	
	public function deletePartners($partner) {
	
		$partner->delete();
		
		if($partner->delete()) {
				
		}
	return ['status' => 'Партнер удален'];
	}

	
}

?>