<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class GuardarDepositoRequest extends Request {

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
			'referencia'=> 'numeric|required:deposito' ,
			'abono'=> 'numeric|required:deposito' ,
				'tipodeposito'=> 'required|not_in:default',
				'fechadeposito'=> 'required|date:deposito' ,
	     	
		];
	}
	
	public function messages()
	{
		return [
			
		'referencia.required'=> 'Ingresa la referencia',
		'referencia.numeric'=> 'Unicamente numeros',
				'abono.required'=> 'Ingresa el monto del deposito',
				'abono.numeric'=> 'Ingresa unicamente numeros para el monto',
							'tipodeposito.not_in'=> 'Selecciona un tipo de deposito',
							'fechadeposito.required'=> 'Selecciona una fecha',
							'fechadeposito.date'=> 'Ingresa una fecha',
			
		];
	}

}
