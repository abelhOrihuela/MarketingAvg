<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Company;
use App\Profile;
use App\Position;
use Session;
use DB;

class CompanyController extends Controller
{
  public function index(){
    $companies=Company::all();

    return view('welcome')->with('companies', $companies);
  }

  public function dashboard(){

    $company=Company::where('id', "=", session('company'))->first();
    $grades=Profile::where("comp_id", "=", session('company'))->groupBy('prof_grade')->get();

    return view('index')
      ->with('company', $company)
      ->with('grades', $grades);
  }
  public function show($id){
    $companyGrade=DB::table('companies')
      ->join('profiles', 'companies.id', '=', 'profiles.comp_id')
      ->where('companies.id', '=', session('company'))
      ->where('profiles.prof_grade', '=', $id)
      ->join('positions', 'profiles.pos_id', '=', 'positions.id')
      ->orderBy('prof_salary')
      ->get();
    $companyGradeSalaryLow=DB::table('companies')
      ->join('profiles', 'companies.id', '=', 'profiles.comp_id')
      ->where('companies.id', '=', session('company'))
      ->where('profiles.prof_grade', '=', $id)
      ->join('positions', 'profiles.pos_id', '=', 'positions.id')
      ->orderBy('prof_salary')
      ->first();



    return view('show')
      ->with('companyGrade', $companyGrade)
      ->with('id', $id)
      ->with('companyGradeSalaryLow', $companyGradeSalaryLow);
  }

  public function menu(){
    return view('dashboard');
  }
}
