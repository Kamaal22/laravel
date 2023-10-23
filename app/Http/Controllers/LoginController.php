<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view("login");
    }

    public function verify()
    {
        $user = new User();

        $user->username = request('username');
        $user->password = request('password');

        $data = DB::table('users')
            ->where('username', $user->username)
            ->where('password', $user->password)
            ->get();
        if ($data->count() == 0) {
            return redirect('login')->with('fail', 'Invalid username or password');
        } else {
            return redirect('dashboard')->with('success', 'Login successful');
        }
    }
}
