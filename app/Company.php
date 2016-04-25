<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table='companies';

    public function profiles(){
       return $this->hasMany('App\Profile', 'comp_id');
    }
}
