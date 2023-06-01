<?php

namespace App\Http\Controllers;

use App\Models\ClientGroups;
use App\Models\Clients;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
        {
            return Clients::with("getGroup")->get();
        }
    public function group()
        {
            return ClientGroups::with("getClients")->get();
        }    
}
