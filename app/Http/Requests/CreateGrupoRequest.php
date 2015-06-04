<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateGrupoRequest extends Request {

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
			'nombre'=> 'required|unique:grupos' ,
	     	
		];
	}
	
	public function messages()
	{
		return [
			'nombre.required'=> 'Ingresa un nombre para el grupo',
			'nombre.unique'=> 'Ese nombre de grupo ya existe',
			
		];
	}

}
