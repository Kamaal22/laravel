<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function showLogin()
    {
        return view("users.login");
    }

    public function showRegister()
    {
        return view("users.register");
    }

    public function userList()
    {
        $users = User::all();
        return view("users.list", ['users' => $users]);
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

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function createUser(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'fullname' => 'required|min:10|max:50',
        //     'username' => 'required|min:5|max:20',
        //     'password' => 'required|min:8|max:20',
        //     'confirmpassword' => 'required|min:8|max:20|same:password',
        //     'email' => 'required|email',
        //     'phone' => 'required|numeric',
        //     'role' => 'required',
        //     'additional_info' => 'nullable',
        // ]);

        // if ($validator->fails()) {
        //     return redirect('register')->withErrors($validator)->withInput();
        // }

        // Get the currently logged-in user
        $loggedInUser = Auth::user();

        $user = new User;

        $user->fullname = $request->input('fullname');
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->role = $request->input('role');

        // Assign the ID of the logged-in user as the creator
        $user->log = [[
            'created_by' => $loggedInUser->id,
            'created_at' => now(),
            'updated_by' => $loggedInUser->id,
            'updated_at' => now(),
        ]];
        // }]"'created_by':"+$loggedInUser->id;

        $user->save();

        if (!$user) {
            return redirect('register')->with('fail', 'User creation failed');
        } else {
            return redirect('register')->with('success', 'User created successfully');
        }
    }
}
