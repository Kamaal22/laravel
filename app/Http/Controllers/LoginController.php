<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //

    public function index()
    {
        return view("login");
    }

    public function verify(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $cred = $request->only('username', 'password');


        if (Auth::attempt($cred)) {
            // Authentication successful
            $user = Auth::user(); // Get the authenticated user

            // Store user information in the session
            Session::put('user_id', $user->id);
            return redirect('dashboard')->with('success', 'Login successful');
        } else {
            return redirect('login')->with('fail', 'Invalid username or password');
        }
        // $user = new User();

        // // $user->username = request('username');
        // $user->password = request('password');

        // $data = DB::table('users')
        //     ->where('username', $user->username)
        //     ->where('password', $user->password)
        //     ->get();
        // if ($data->count() == 0) {
        //     return redirect('login')->with('fail', 'Invalid username or password');
        // } else {
        //     return redirect('dashboard')->with('success', 'Login successful');
        // }
    }
}
