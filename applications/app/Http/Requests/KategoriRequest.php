<?php

namespace App\Http\Requests;

class KategoriRequest extends Request
{
  public function authorize()
  {
      return true;
  }

  /**
   * Get the validation rules that apply to the request
   *
   * @return array
   *
  */
  public function rules()
  {
    return [
      'nama_kategori'   => 'required|max:100'
    ];
  }

  public function messages()
  {
    return [
      'nama_kategori.required' => 'Wajib di Isi',
    ];
  }
}
