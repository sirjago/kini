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
			'username.required'=> 'Vo puto',
			'email.unique'=> ' ya existe puto',
			'username.unique'=> ' ese no puto',
			'password.required'=> 'falta pass puto',
			'email.required'=> 'email puto',
		];
	}

}
