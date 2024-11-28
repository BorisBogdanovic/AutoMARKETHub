<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'), $request->remember)) {
            $user = Auth::user();

            $token = $user->createToken('auth-token')->plainTextToken;

            if ($user->is_admin) {
                return redirect()->route('AdminDashboardView')->withCookie('auth-token', $token);
            } else {
                return redirect()->route('homeView')->withCookie('auth-token', $token);
            }
        } else {
            return redirect()->route('loginView')->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function forgotPasswordView()
    {

        return view('forgotPassword');
    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $status = Password::sendResetLink($request->only('email'));

        if ($status == Password::RESET_LINK_SENT) {
            return redirect()->route('loginView');
        }

        return redirect()->back()->withErrors(['email' => trans($status)]);

    }

    public function resetPasswordView($token, $email)
    {

        return view('resetPassword', ['token' => $token, 'email' => $email]);
    }

    public function resetPasswordLogic(ResetPasswordRequest $request)
    {
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            return redirect(route('loginView'));
        }

        return redirect()->back()->withErrors(['password' => trans($status)]);
    }

    public function logout()
    {

        if (Auth::check()) {
            $accessToken = Auth::user()->currentAccessToken();

            if ($accessToken) {
                $accessToken->delete();
            }
        }

        Auth::logout();

        return redirect()->route('homeView');
    }
}
