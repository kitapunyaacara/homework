<?php namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;

class RegisterRequest extends Request
{

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
			'name' => 'required|max:30',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:8|confirmed',
		];
	}

	public function messages()
	{
		return [
			'name.required' => 'Wajib di Isi',
			'email.required' => 'Wajib di Isi',
			'email.unique' => 'Sudah Terdaftar',
			'password.required'  => 'Wajib di Isi',
			'password.min'  => 'Minimal 8 Karakter',
		];
	}

}
