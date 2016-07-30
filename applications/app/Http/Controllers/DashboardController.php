<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class DashboardController extends Controller
{
  /**
  * Create a new authentication controller instance.
  *
  * @return void
  */
   public function __construct()
   {
     $this->middleware('admin');
   }

	/**
	* Menampilkan data dari database
	*
	*
	*
	*/
	public function index()
	{
		return view('backend.pages.dashboard');
	}

}
