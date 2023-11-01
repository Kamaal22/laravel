<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $this->validate($request, [
            'username' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user) {
            // Generate OTP logic here (e.g., a random number)
            $otp = mt_rand(100000, 999999);
            $user->update(['otp' => $otp]);

            // Send the OTP to the user via email
            Mail::send('emails.otp', ['otp' => $otp], function ($message) use ($user) {
                $message->to($user->email)->subject('Your OTP for Password Reset');
            });

            return redirect()->back()->with('success', 'OTP sent successfully.');
        } else {
            return redirect()->back()->with('fail', 'Username not found.');
        }
    }
}
