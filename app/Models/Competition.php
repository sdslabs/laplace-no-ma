<?php

namespace App\Models;

use SDSLabs\Quark\App\Models\Competition as QuarkCompetition;
use Carbon\Carbon;

class Competition extends QuarkCompetition
{
  protected $appends = ['laplace', 'status'];

  public function getLaplaceAttribute()
  {
    return "Welcome";
  }
}
