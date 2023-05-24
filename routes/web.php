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

Route::get('/', function () {
    return view('welcome');
});


Route::post("/test", function()
    {
        echo "testing post method";    
    });
Route::any("/testany", function(){
        echo "testing the route";
});

Route::get("/demo/{name}/{id?}",function($name, $id = null){
    echo $name." ".$id;
});


