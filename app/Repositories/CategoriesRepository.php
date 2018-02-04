<?php

namespace Corp\Repositories;

use Corp\Categories;


class CategoriesRepository extends Repository {
	
	
	public function __construct(Categories $categories) {
		$this->model = $categories;
	}
	
	
?>