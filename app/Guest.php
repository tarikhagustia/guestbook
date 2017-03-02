<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = "guest";

    public function purpose()
    {
      return $this->belongsTo('App\Purpose');
    }
    public function area()
    {
      return $this->belongsTo('App\Area');
    }

    public function getCheckoutTimeAttribute($value)
    {
      if ($value == null) {
        return "Not yet";
      }else{
        return $value;
      }
    }

}
