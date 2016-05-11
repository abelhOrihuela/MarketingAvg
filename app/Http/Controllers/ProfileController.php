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

      $profile= new Profile();
      $profile->prof_name=$request->name;
      $profile->prof_salary=$request->salary;
      $profile->prof_progresion=$request->progresion;
      $profile->prof_min=$request->min;
      $profile->prof_max=$request->max;
      $profile->prof_grade=$request->grade;
      $profile->pos_id=$request->position;
      $profile->comp_id=session('company');



      $profile->save();

      return redirect()->route('profile_new_path');

    }

    public function edit($id){
      $profile=Profile::where('id', "=", $id)->first();
      $positions=Position::all();


      return view('edit')
        ->with('positions', $positions)
        ->with('profile', $profile);
    }


    public function update(Request $request, $id){

      $profile=Profile::where('id', "=", $id)->first();

      $profile->prof_name=$request->name;
      $profile->prof_salary=$request->salary;
      $profile->prof_progresion=$request->progresion;
      $profile->prof_min=$request->min;
      $profile->prof_max=$request->max;
      $profile->prof_grade=$request->grade;
      $profile->pos_id=$request->position;
      $profile->comp_id=session('company');

      $profile->save();

      return redirect()->route('profile_edit_path',$id );
      dd($request->all());
    }
}
