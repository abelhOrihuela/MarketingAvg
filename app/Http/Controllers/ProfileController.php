<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profile;
use App\Position;

class ProfileController extends Controller
{
    public function index(){
      $profile=Profile::all();

      return $profile;
    }

    public function store(){
      $positions=Position::all();
      return view('newprofile')
        ->with('positions', $positions);
    }

    public function create(Request $request){
      dd($request);
    }
}
