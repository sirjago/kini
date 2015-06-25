<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class GuardarBancoRequest extends Request {

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
			'clabehidden'=> 'digits:18|required:users' ,
			'cuentahidden'=> 'digits:16|required:users' ,
	     	
		];
	}
	
	public function messages()
	{
		return [
			'clabehidden.digits'=> 'La clabe tiene que ser de 18 numeros exactamente',
		'clabehidden.required'=> 'Ingresa la cuenta CLABE',
			'cuentahidden.digits'=> 'El numero de tarjeta tiene que ser de 16 numeros exactamente',
				'cuentahidden.required'=> 'Ingresa el numero de tarjeta',
			
		];
	}

}
