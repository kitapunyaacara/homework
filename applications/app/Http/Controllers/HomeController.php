<?php

namespace App\Http\Controllers;

use App\Jobs\ChangeLocale;

class HomeController extends Controller
{

  /**
   * Menampilkan welcome page
   *
   * @return Response
   */
  public function index()
  {
    return view('front.index');
  }

  /**
   * Ganti Bahasa
   *
   * @param App\Jobs\ChangeLocaleCommand $changeLocale
   * @param String $lang
   * @return Response
   */
  public function language($lang, ChangeLocale $changeLocale)
  {
    $lang = in_array($lang, config('app.language')) ? $lang : config('app.fallback_locale');
    $changeLocale->lang = $lang;
    $this->dispatch($changeLocale);

    return redirect()->back();
  }
}
