<?php

namespace Corp\Repositories;

use Corp\Owner;

class OwnersRepository extends Repository {
	
	public function __construct(Owner $owner) {
		$this->model = $owner;
	}


	
	public function updateOwner($request,$id) {

		$data = $request->except('_token');
		if(isset($data['password'])) {
			$data['password'] = bcrypt($data['password']);
		}
	
	
		$owner = new Owner;
		$owner->name        = $data['name'];
		$owner->nick        = $data['nick'];
		$owner->phone1 		= $data['phone1'];
		$owner->phone2 		= $data['phone2'];
		$owner->email 		= $data['email'];
		$owner->country 	= $data['country'];
		$owner->city 		= $data['city'];
		$owner->password	= $data['password'];
		$id->delete();
		$owner->save();
		
		return ['status' => 'Карта владельца обновлена'];
		
		}
	
	public function addOwner($request) {
	
	
	
		$data = $request->all();
		
		$owner= new Owner;
		$owner->name        = $data['name'];
		$owner->nick        = $data['nick'];
		$owner->phone1 		= $data['phone1'];
		$owner->phone2 		= $data['phone2'];
		$owner->email 		= $data['email'];
		$owner->country 	= $data['country'];
		$owner->city 		= $data['city'];
		
		$owner->save();
		return ['status' => 'Оборудован владелец'];

		}
	
	
	public function deleteOwners($owner) {
		
		
		
		$owner->delete();
		
		if($owner->delete()) {
			
		}
		return ['status' => 'Владелец удален'];	
	}
	
}

?>