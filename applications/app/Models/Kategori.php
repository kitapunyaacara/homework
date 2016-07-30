<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Kategori extends Model
{
  use DatePresenter;

  /**
    * The database table used by the model
    *
    * @var string
    */
  protected $table = 'kategori';

  protected $fillable = [
    'id', 'parent_id', 'slug', 'nama_kategori'
  ];
}
