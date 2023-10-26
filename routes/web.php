<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
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



Route::get("login", [LoginController::class, 'index']);

Route::get("register", function () {
    return view("register");
});


Route::post('loginverify', [LoginController::class, 'verify']);

// Route::middleware(['checkSession'])->group(function () {
//     Route::get("/dashboard", function () {
//         return view("dashboard");
//     });
// });


Route::group(['middleware', 'CheckSession'], function () {
    Route::get("/calendar", function () {
        return view("calendar");
    });

    Route::get("/dashboard", function () {
        return view("dashboard");
    });
    Route::get("logout", [LoginController::class, "logout"]);
});
