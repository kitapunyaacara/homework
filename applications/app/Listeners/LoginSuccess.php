<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class LoginSuccess extends ListenerBase
{

  /**
   * Handler the event
   *
   * @param Login $login
   * @return void
   */
  public function handle(Login $login)
  {
    $this->status->setLoginStatus($login);
  }
}
