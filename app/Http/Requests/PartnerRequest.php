<?php

namespace Corp\Http\Requests;

use Corp\Http\Requests\Request;

class PartnerRequest extends Request
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
    	
    	
    	
    	$validator->sometimes('id','unique:partners|max:255', function($input) {
        	
			$route = \Route::current();
			

        	if($this->route()->hasParameter('partners')) {
				$model = $this->route()->parameter('partners');
				
				return ($model->id !== $input->id)  && !empty($input->id);
			}
        	
        	return !empty($input->id);
        	
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
            
            
        ];
    }
}
