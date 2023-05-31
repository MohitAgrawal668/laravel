<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
        {   
            return view("frontend.contact");   
        }

    public function upload(Request $request)
        {
            $filename = time()."-mohit.".$request->file("upload-file")->getClientOriginalExtension();
            $request->file("upload-file")->storeAs('uploads', $filename);
        }    
}
