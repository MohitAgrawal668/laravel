<?php

namespace App\Http\Controllers;

use App\Models\Customers;
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
            $customer = new Customers();
            $customer->name = $request['name'];
            $customer->email = $request['email'];
            $customer->mobile = $request['mobile'];
            $customer->password = md5($request['password']);
            $customer->address = $request['address'];
            $customer->dob = "2022-02-01";
            $customer->gender = "M";
            $customer->save();
        }    
}
