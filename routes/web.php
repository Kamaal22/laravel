<?php

// use App\Http\Middleware\CheckSession;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\RegisterController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ForgotPasswordController;
use App\Jobs\SlowJobs;

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



Route::get("login", [UserController::class, 'showLogin']);

Route::post('loginverify', [UserController::class, 'verify']);
Route::get('forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot-password');


Route::post('send-otp', [ForgotPasswordController::class, 'sendOTP'])->name('forgot-password.otp');
// 
// 
//
Route::middleware(['check.session'])->group(function () {

    SlowJobs::dispatch();

    Route::get("calendar", function () {
        return view("calendar");
    });

    Route::get("dashboard", function () {
        return view("dashboard");
    });

    Route::get("logout", [UserController::class, "logout"]);

    Route::get("register", [UserController::class, "showRegister"]);
    Route::post("createuser", [UserController::class, "createUser"]);

    Route::get("list", [UserController::class, "userList"]);
});

// check is route exists or not, if not then redirect to 404 page
Route::fallback(function () {
    return view("404");
});
