<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Company;
use App\Profile;
use App\Position;
use Session;

class CompanyController extends Controller
{
    public function index(){
      $companies=Company::all();

      return view('welcome')->with('companies', $companies);
    }

    public function dashboard(){
      //return "oalH";
      //  Session::put('company', $request->company);

        $company=Company::where('comp_name', "=", session('company'))->first();

      return view('dashboard')->with('company', $company);
    }
}
