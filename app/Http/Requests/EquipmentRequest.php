<?php

namespace Corp\Http\Requests;

use Corp\Http\Requests\Request;

class EquipmentRequest extends Request
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
    public function rules()
    {
        $id = (isset($this->route()->parameter('equipment')->id)) ? $this->route()->parameter('equipment')->id : '';
		//dd($id); //
		return [
             'title' => 'required|max:255',
			 'text' => 'required|max:255',
			 
        ];
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    
}
