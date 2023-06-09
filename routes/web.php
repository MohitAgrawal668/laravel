<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;

use App\Http\Controllers\frontend\AboutController as FrontendAboutController;

use App\Http\Controllers\frontend\ContactController as FrontendContactController;

use App\Http\Controllers\frontend\ServicesController as FrontendServicesController;
use App\Http\Controllers\frontend\ArticleController as FrontendArticleController;
use App\Http\Controllers\frontend\EventController as FrontendEventController;

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


/*Route::get("/",[HomeController::class, 'index']);
Route::get("/about", [HomeController::class, 'about']);
Route::get("/contact",SingleActionController::class);

Route::resource("photo", PhotoController::class);

Route::get("/register", [HomeController::class, 'form']);

Route::post("/register", [HomeController::class, 'register']);*/



Route::group(["prefix" => "/customer"],function(){
    Route::get("",[CustomerController::class,"index"])->name("customer.create");
    Route::post("",[CustomerController::class,"store"]);
    Route::get("/view",[CustomerController::class, "view"])->name("customer.view");
    Route::get("/trash",[CustomerController::class, "trash"])->name("customer.trash");
    Route::get("/delete/{id}",[CustomerController::class, "delete"])->name("customer.delete");
    Route::get("/force-elete/{id}",[CustomerController::class, "forceDelete"])->name("customer.force_delete");
    Route::post("/update/{id}",[CustomerController::class, "update"])->name("customer.update");
    Route::get("/edit/{id}",[CustomerController::class, "edit"])->name("customer.edit");
    Route::get("/restore/{id}",[CustomerController::class,"restore"])->name("customer.restore");
    Route::get("/choose-lang/{lang}",[CustomerController::class,"chooselang"])->name("customer.chooseLang");
});

/*Route::get("get-all-session",function(){
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
    });*/

Route::get("/",[FrontendHomeController::class, "index"])->name("frontend.home");
Route::get("/about",[FrontendAboutController::class, "index"])->name("frontend.about");
Route::get("/services",[FrontendServicesController::class, "index"])->name("frontend.services");
Route::get("/articles",[FrontendArticleController::class, "index"])->name("frontend.article");
Route::get("/contact",[FrontendContactController::class, "index"])->name("frontend.contact");
Route::get("/event",[FrontendEventController::class, "index"])->name("frontend.event");    

Route::get("/upload-form",function(){
    return view("frontend.upload-form");
});

Route::post("/upload",[FrontendContactController::class,"upload"])->name('frontend.upload');

Route::get("/client",[ClientController::class, "index"])->name("client.index");

//Route::get("/company",[CompanyController::class, "index"])->name("company.index")->middleware('guard');
Route::get("/client-group/{group_id}",[ClientController::class, 'group'])->name("client.group");
Route::get("/company/{company_id}",[CompanyController::class, 'getCompany']);

Route::get("/no_access",[CompanyController::class,"no_access"]);
Route::get("/login",function(){
    session()->put('user_id','1234');
});

Route::get("/logout",function(){
    session()->forget('user_id');
});
