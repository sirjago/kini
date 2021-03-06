<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {

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
			'username'=> 'required|unique:users' ,
	     	'email'=> 'required|unique:users' ,
			'password'=> 'required'
		];
	}
	
	public function messages()
	{
		return [
			'username.required'=> 'Ingresa el usuario',
			'email.unique'=> 'Esa cuenta de email ya existe',
			'username.unique'=> 'Ese usuario ya existe',
			'password.required'=> 'Ingresa la contraseña',
			'email.required'=> 'Ingresa el email',
		];
	}

}
