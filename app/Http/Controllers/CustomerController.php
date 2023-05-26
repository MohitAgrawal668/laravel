<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
        {
            return view("create_customer");
        }
    public function store(Request $request)
        {   
            $request->validate([
                "name" => "required",
                "email" => "required|email",
                "mobile" => "required|numeric|min:10",
                "password" => "required",
                "confirm_password" => "required|same:password",
                "address" => "required",
            ]);
            print_r($request->all());
        }    
}
