<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UnirseGrupoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'clave'=> 'required:grupos' ,
	     	
		];
	}
	
	public function messages()
	{
		return [
			'clave.required'=> 'Ingresa la clave del grupo',
			
			
		];
	}

}
