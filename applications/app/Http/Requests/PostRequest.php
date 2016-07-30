<?php

namespace App\Http\Requests;

class PostRequest extends Request
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
      'judul'   => 'required|max:100|min:3',
      'konten' => 'required',
      'image'   => 'required|mimes:jpeg,bmp,png',
      'thumb'   => 'required|mimes:jpeg,bmp,png',
      'tags'    => 'required'
    ];
  }

  public function messages()
  {
    return [
      'judul.required' => 'Wajib di Isi',
      'konten.required' => 'Wajib di Isi',
      'image.required' => 'Wajib di Isi',
      'image.mimes' => 'Tipe File jpeg, bmp, png',
      'thumb.required' => 'Wajib di Isi',
      'thumb.mimes' => 'Tipe File jpeg, bmp, png',
      'tags.required' => 'Wajib di Isi'
    ];
  }
}
