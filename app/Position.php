<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    //

    public function profiles(){
      return $this->hasMany('App\Position', 'pos_id');
    }
}
