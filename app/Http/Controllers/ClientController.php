<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
        {
            return Clients::with("getGroup")->get();
        }
}
