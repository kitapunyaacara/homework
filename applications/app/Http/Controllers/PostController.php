<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Auth;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Kategori;
use App\Models\Users;

class PostController extends Controller
{

  public function index()
  {
    $getPost = Post::join('users', 'users.id', '=', 'post.author_id')
                    ->join('kategori', 'kategori.id', '=', 'post.kategori_id')
                    ->select('judul', 'users.name', 'kategori.nama_kategori', 'publish', 'tags')
                    ->get();
    // dd($getPost);
    return view('backend.pages.post-list', compact('getPost'));
  }

  public function create()
  {
    $getkategori = Kategori::get();

    return view('backend.pages.post-create', compact('getkategori'));
  }

  public function store(PostRequest $request)
  {
    $image = $request->file('image');
    $thumb = $request->file('thumb');
    if ($image != null) {
      $image_name = time(). '.' . $image->getClientOriginalExtension();
      Image::make($image)->resize(472,270)->save('img/'. $image_name);

      $thumb_name = time(). '.' . $thumb->getClientOriginalExtension();
      Image::make($thumb)->resize(472,270)->save('img/'. $thumb_name);

      $set = new Post;
      $set->kategori_id = $request->kategori_id;
      $set->publish = $request->publish;
      $set->author_id = 1;
      // $set->author_id = Auth::user()->id;
      $set->image = $image_name;
      $set->thumb = $thumb_name;
      $set->judul = $request->judul;
      $set->tags = $request->tags;
      $set->konten = $request->konten;
      $set->save();
    }

    return redirect()->route('admin.posting')->with('message','Berhasil memasukkan pegawai baru.');


  }

}
