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
      /*

      $product= new Product();
    $product->name=$request->name;
    $product->description=$request->description;
    $product->cost=$request->cost;
    $product->price=$request->price;
    $product->other=$request->other;
    $product->code=$request->code;


      */
      $profile->save();
      //dd($request->all());
    }
}
