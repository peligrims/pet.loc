<?php

namespace Corp\Http\Requests;

use Corp\Http\Requests\Request;

class AnimalRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::user();
    }
    
     protected function getValidatorInstance()
     {
    	$route = \Route::current();
		
		$validator = parent::getValidatorInstance();
    	
    	
    	
    	$validator->sometimes('chip','unique:animals|max:255', function($input) {
        	
			$route = \Route::current();
			

        	if($this->route()->hasParameter('animals')) {
				$model = $this->route()->parameter('animals');
				
				return ($model->chip !== $input->chip)  && !empty($input->chip);
			}
        	
        	return !empty($input->chip);
        	
        });
        
        return $validator;
    	
    	
    }	

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        return [
            //
            'title' => 'required|max:255',
            'text' => 'required',
           
        ];
    }
}
