<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table='profiles';
  public function company()
  {
      return $this->belongsTo('App\Company', 'comp_id');
  }

  public function position(){
    return $this->belongsTo('App\Position', 'pos_id');
  }
}
