<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::post("/test", function()
    {
        echo "testing post method";    
    });
Route::any("/testany", function(){
        echo "testing the route";
});

Route::get("/demo/{name}/{id?}",function($name, $id = null){
    $data = compact('name','id');
    return view("demo")->with($data);
});

Route::get("/{name?}",function($name = null){
    $data = compact('name');
    return view('home')->with($data);
});


