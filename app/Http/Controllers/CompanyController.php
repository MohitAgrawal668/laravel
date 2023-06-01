<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyAddress;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
        {
            return CompanyAddress::with("getCompany")->get();
        }
    public function no_access()
        {
            return view("no_access");
        }  
    public function getCompany(Company $company_id)
        {
            return $company_id;
        }      
}
