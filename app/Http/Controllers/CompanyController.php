<?php

namespace App\Http\Controllers;

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
}
