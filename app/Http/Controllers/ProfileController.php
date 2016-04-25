<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profile;

class ProfileController extends Controller
{
    public function index(){
      $profile=Profile::all();

      return $profile;
    }
}
