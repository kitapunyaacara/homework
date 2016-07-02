<?php

namespace App\Http\Requests;

class ContactRequest extends Requests
{
  /**
   * Get the validation rules that apply to the request
   *
   * @return array
   *
  */
  public function rules()
  {
    return [
      'nama'  => 'required|max:100|min:3',
      'email' => 'required|email',
      'pesan' => 'required|max:250|min:5'
    ]
  }

  public function message()
  {
    'nama.required' => 'Wajib di Isi',
    'email.required' => 'Wajib di Isi',
    'pesan.required' => 'Wajib di Isi',
  }
}
