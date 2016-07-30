<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Auth;
use App\Http\Requests\KategoriRequest;
use App\Models\Post;
use App\Models\Kategori;
use App\Models\Users;

class KategoriController extends Controller
{

  public function index()
  {
    $getKategori = Kategori::where('parent_id', '=', '0')->get();

    $listKategori = Kategori::get();
    $getParent  = Kategori::select('*', 'nama_kategori as nama_parent')->get();
    // dd($getParent);
    return view('backend.pages.kategori-list', compact('getKategori', 'listKategori', 'getParent'));
  }

  public function store(KategoriRequest $request)
  {
    $slug = str_slug($request->nama_kategori);

    $set = new Kategori;
    $set->parent_id = $request->parent_id;
    $set->slug = $slug;
    $set->nama_kategori = $request->nama_kategori;
    $set->save();

    return redirect()->route('admin.kategori')->with('message','Berhasil Tambah Kategori Baru.');
  }

}
