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
    $companyGradeSalaryLow=DB::table('profiles')
    //->join('profiles', 'companies.id', '=', 'profiles.comp_id')
    //->where('companies.id', '=', session('company'))
    ->where('profiles.prof_grade', '=', $id)
    ->where('profiles.comp_id', '!=', session('company'))
    ->join('positions', 'profiles.pos_id', '=', 'positions.id')
    ->orderBy('prof_salary')
    ->first();

    if($companyGradeSalaryLow){
      return view('show')
      ->with('companyGrade', $companyGrade)
      ->with('id', $id)
      ->with('companyGradeSalaryLow', $companyGradeSalaryLow);
    }
    else{
      return view('errors.503');
    }


  }

  public function showall(){

    /***********************************************************/
    /* CONSULTAR TODOS LOS GRADOS EXISTENTES PARA LA EMPRESA*/
    $allGradesForCompany=$salaryLow=DB::table('profiles')
    ->where('profiles.comp_id', '!=', session('company'))
    ->groupBy('prof_grade')
    ->get();


    $salaryLowForGrade=[];
    for ($i=0; $i < sizeOf($allGradesForCompany) ; $i++) {

      $salaryLowForGrade[$i]=$this->salaryLowGrade($allGradesForCompany[$i]->prof_grade);

    }

    $companyGrade=DB::table('companies')
    ->join('profiles', 'companies.id', '=', 'profiles.comp_id')
    ->where('companies.id', '=', session('company'))
    ->join('positions', 'profiles.pos_id', '=', 'positions.id')
    ->orderBy('prof_grade')
    ->orderBy('prof_salary')
    ->get();
    $companyGradeSalaryLow=DB::table('profiles')
    ->where('profiles.comp_id', '!=', session('company'))
    ->join('positions', 'profiles.pos_id', '=', 'positions.id')
    ->orderBy('prof_salary')
    ->first();




    return view('showall')
    ->with('companyGrade', $companyGrade)
    ->with('salaryLowForGrade', $salaryLowForGrade)
    ->with('companyGradeSalaryLow', $companyGradeSalaryLow);
  }

  public function menu(){
    return view('dashboard');
  }

  public function downloadPdf(){
    ob_start();

    set_time_limit(0);
    $pdf =  \App::make('dompdf.wrapper');
    $pdf->loadHTML("");
    $allGradesForCompany=$salaryLow=DB::table('profiles')
    ->where('profiles.comp_id', '!=', session('company'))
    ->groupBy('prof_grade')
    ->get();


    $salaryLowForGrade=[];
    for ($i=0; $i < sizeOf($allGradesForCompany) ; $i++) {

      $salaryLowForGrade[$i]=$this->salaryLowGrade($allGradesForCompany[$i]->prof_grade);

    }

    $companyGrade=DB::table('companies')
    ->join('profiles', 'companies.id', '=', 'profiles.comp_id')
    ->where('companies.id', '=', session('company'))
    ->join('positions', 'profiles.pos_id', '=', 'positions.id')
    ->orderBy('prof_grade')
    ->orderBy('prof_salary')
    ->get();
    $companyGradeSalaryLow=DB::table('profiles')
    ->where('profiles.comp_id', '!=', session('company'))
    ->join('positions', 'profiles.pos_id', '=', 'positions.id')
    ->orderBy('prof_salary')
    ->first();
    $view =  \View::make('pdf.invoice', compact('companyGrade', 'salaryLowForGrade', 'companyGradeSalaryLow'))->render();

    $pdf->loadHTML("<h1>Test</h1>");
    //  return $pdf->stream();

    $pdf->loadHTML($view);
    return $pdf->download("Analisis".session('company').'.pdf');



  }

  public function getData(){
    $data =  [
      'quantity'      => '1' ,
      'description'   => 'some ramdom text',
      'price'   => '500',
      'total'     => '500'
    ];
    return $data;
  }

  public function salaryLowGrade($id){

    $salaryLow=DB::table('profiles')
    ->where('profiles.prof_grade', '=', $id)
    ->where('profiles.comp_id', '!=', session('company'))
    ->join('positions', 'profiles.pos_id', '=', 'positions.id')
    ->orderBy('prof_salary')
    ->first();

    return $salaryLow;
  }
}
