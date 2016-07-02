<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
  /**
    * Create a new ContactController instance
    *
    * @return void
    */
  public function __construct()
  {
    $this->middleware('admin', ['except' => ['create', 'store', 'index']]);
  }

	/**
	* Menampilkan data dari database
	*
	*
	*
	*/
	public function index()
	{
		return 'Halaman User';
	}
	
	public function admin()
	{
		return 'Halaman Admin';
	}
	
	public function dashboard()
	{
		return 'Halaman Admin';
	}
	public function user()
	{
		return 'Halaman User';
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function create()
	{
	//return view('/');
	return view('front.contact');
	}

  /**
   * Store data yang baru di create
   *
   * @param ContactRequest $request
   * @return Response
   */
  public function store(ContactRequest $request)
  {
    $simpan = $request->all();
    Contact::create($simpan);

    return redirect('/')->with('tambah', 'Terimakasih');
  }

}
