<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    // if logged in, show dashboard view else go to login view
    public static function index()
    {
        // if (auth()->check()) {
        //     return view("dashboard");
        // } else {
        //     return view("login");
        // }
        return view("index");
    }
}
