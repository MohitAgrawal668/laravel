<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
        {
            return view("home");
        }
    public function about()
        {
            return view("about");
        } 
    public function form()
        {
            return view("form");    
        } 
    public function register(Request $request)
        {
            print_r($request->all());
        }          
}
