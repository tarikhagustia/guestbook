<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = "card";

    public function guest()
    {
      return $this->hasOne('App\Guest');
    }
}
