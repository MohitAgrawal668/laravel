<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SingleActionController;
use App\Models\Customers;
use Illuminate\Http\Request;

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


Route::get("/",[HomeController::class, 'index']);
Route::get("/about", [HomeController::class, 'about']);
Route::get("/contact",SingleActionController::class);

Route::resource("photo", PhotoController::class);

Route::get("/register", [HomeController::class, 'form']);

Route::post("/register", [HomeController::class, 'register']);

Route::get("/customer",[CustomerController::class,"index"])->name("customer.create");

Route::post("/customer",[CustomerController::class,"store"]);

Route::get("/customer/view",[CustomerController::class, "view"])->name("customer.view");
Route::get("/customer/trash",[CustomerController::class, "trash"])->name("customer.trash");

Route::get("/customer/delete/{id}",[CustomerController::class, "delete"])->name("customer.delete");
Route::post("/customer/update/{id}",[CustomerController::class, "update"])->name("customer.update");
Route::get("/customer/edit/{id}",[CustomerController::class, "edit"])->name("customer.edit");

Route::get("/customer/restore/{id}",[CustomerController::class,"restore"])->name("customer.restore");

Route::get("get-all-session",function(){
    print_r(session()->all());
});

Route::get("set-session",function(Request $request){
    $request->session()->put('user_name',"Mohit Agrawal");
    $request->session()->put('user_id','9087');

    return redirect("get-all-session");
});

Route::get("destroy-session",function()
    {
        session()->forget('user_name');
        session()->forget('user_id');
        return redirect("get-all-session");
    });