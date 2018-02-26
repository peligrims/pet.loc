<?php

namespace Corp\Repositories;

use Corp\Owner;

class OwnersRepository extends Repository {
	
	public function __construct(Owner $owner) {
		$this->model = $owner;
	}
public function addOwner($request) {
	
	$data = $request->all();
	
	$owner= new Owner;
	$owner->name        = $request['name'];
	$owner->nick        = $request['nick'];
	$owner->phone1 		= $request['phone1'];
	$owner->phone2 		= $request['phone2'];
	$owner->email 		= $request['email'];
	$owner->country 	= $request['country'];
	$owner->city 		= $request['city'];
	$owner->save();
	return ['status' => 'Владелец добавлен'];



	
	}
public function deleteOwners($owner) {
		
		
		
		$owner->delete();
		
		if($owner->delete()) {
			
		}
		return ['status' => 'Владелец удален'];	
	}
	
}

?>