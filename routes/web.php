<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SingleActionController;
use App\Models\Customers;

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

Route::get("/customer/delete/{id}",[CustomerController::class, "delete"])->name("customer.delete");
Route::post("/customer/update/{id}",[CustomerController::class, "update"])->name("customer.update");
Route::get("/customer/edit/{id}",[CustomerController::class, "edit"])->name("customer.edit");