<?php namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class LoginRequest extends Request {

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
			'log' => 'required',
			'password' => 'required',
		];
	}

		/**
	 * Get the error messages for the defined validation rules.
	 *
	 * @return array
	 */
	public function messages()
	{
			return [
					'log.required' => 'Wajib di Isi',
					'password.required'  => 'Wajib di Isi',
			];
	}

}
