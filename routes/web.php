<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, "index"]);


Route::get("/listings/{id}", function ($id) {
    return view("listing", ["listing" => Listing::find($id)]);
});

Route::get("/dashboard", function () {
    return view("dashboard");
});

Route::get("/calendar", function () {
    return view("calendar");
});


Route::get("login", [LoginController::class, 'index']);


Route::post('loginverify', [LoginController::class, 'verify']);
