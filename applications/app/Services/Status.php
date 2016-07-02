<?php

namespace App\Services;

class Status
{
  /**
   *  Set login user status
   * @param Illuminate\Auth\Events\Login $login
   * @return void
   */
  public function setLoginStatus($login)
  {
    session()->put('status', $login->user->role->slug);
  }

  /**
   * Set visitor user status
   *
   * @return void
   */
  public function setVisitorStatus()
  {
    session()->put('status', 'visitor');
  }

  /**
   * Set the status
   *
   * @return void
   */
  public function setStatus()
  {
    if(!session()->has('status'))
    {
      session()->put('status', auth()->check() ? auth()->user()->role->slug : 'visitor');
    }
  }
}
