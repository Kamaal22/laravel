<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\SendOtpEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('users.forgot-password');
    }

    public function sendOTP(Request $request)
    {
        $val = $this->validate($request, [
            'username' => 'required',
        ]);

        if (!$val) {
            return back()->with(['fail' => 'Username field is required']);
        }

        $user = User::where('username', $request->username)->where('email', $request->username)->first();

        if ($user) {
            // Generate OTP logic here (e.g., a random number)
            $otp = mt_rand(100000, 999999);
            $user->update(['otp' => $otp]);

            // get the first character of the user's email and the last 2 characters of the user's email and store it in a variable


            // Dispatch the SendOtpEmail job to send the OTP via email
            SendOtpEmail::dispatch($user, $otp);

            return redirect()->back()->with('success', 'OTP has been sent to 
            ' . " \"" . $user->email . "\"");
        } else {
            return redirect()->back()->with('fail', 'Username not found.');
        }
    }
}
