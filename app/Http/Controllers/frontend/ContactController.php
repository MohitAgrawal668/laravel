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
            $request->file("upload-file")->store('uploads');
        }    
}
