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
			'username' => 'required|max:30|alpha|unique:users',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:8|confirmed',
		];
	}

	public function message()
	{
		return [
			'username.required' => 'Wajib di Isi',
			'email.required' => 'Wajib di Isi',
			'password.required'  => 'Wajib di Isi',
		];
	}

}
