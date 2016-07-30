<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Post extends Model
{
  use DatePresenter;

  /**
    * The database table used by the model
    *
    * @var string
    */
  protected $table = 'post';

  protected $fillable = [
    'id', 'judul', 'author_id', 'kategori_id', 'slug', 'konten', 'image', 'thumb'
  ];
}
