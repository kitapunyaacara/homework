<?php

namespace App\Jobs;

use App\Jobs\Job;

class ChangeLocale extends Job
{
  public $lang;

  /**
   * Eksekusi the job
   *
   *  @return void
   */
  public function handle()
  {
    session()->set('locale', $this->lang);
  }
}
