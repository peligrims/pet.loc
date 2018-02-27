<?php

namespace Corp\Repositories;

use Corp\Clinic;

class ClinicsRepository extends Repository {
	
	
	public function __construct(Clinic $clinic) {
		$this->model = $clinic;
		
	}
	public function addClinic($request) {

		$data = $request->all();
		
		$clinic = new Clinic;
		$clinic->title     = $request['title'];
		$clinic->address    = $request['address'];
		$clinic->phone    = $request['phone'];
		$clinic->email    = $request['email'];
		$clinic->leader    = $request['leader'];
		$clinic->region    = $request['region'];
		
		$clinic->save();
		return ['status' => 'Клиника добавлена'];
		
	}
	public function updateClinic($request,$clinic) {

		$data = $request->all();
		$clinic = new Clinic;
	
		$clinic->title     = $request['title'];
		$clinic->address    = $request['address'];
		$clinic->phone    = $request['phone'];
		$clinic->email    = $request['email'];
		$clinic->leader    = $request['leader'];
		$clinic->region    = $request['region'];
		
		$clinic->save();
		return ['status' => 'Клиника обновлена'];
		
	}
	public function deleteClinic($clinic) {
		
		$clinic->delete();
		return ['status' => 'Клиника удалена'];
		
	}
		
}

?>