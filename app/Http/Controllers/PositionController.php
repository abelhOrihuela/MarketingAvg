<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Position;

class PositionController extends Controller
{
    //
    public function store(){
      return view('position.newposition');
    }

    public function create(Request $request){
      $position = new Position();
      $position->pos_name=$request->name;
      $position->pos_other=$request->description;
      $position->save();

      return redirect()->route('position_store_path');

    }
}
