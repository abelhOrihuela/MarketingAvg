<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Company;
use Session;

class CompanyController extends Controller
{
    public function index(){
      $companies=Company::all();
      //return $companies;
      return view('welcome')->with('companies', $companies);
    }

    public function dashboard(Request $request){
        Session::put('company', $request->company);
      return Session::get('company');
    }
}
