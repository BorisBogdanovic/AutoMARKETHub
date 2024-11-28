<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Mail\NewUserCreated;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register(RegisterUserRequest $request)
    {

        $imagePath = $request->file('user_image_path')->store('profile_pictures', 'public');

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_image_path'=>$imagePath

        ]);

//        $admin = User::where('is_admin', 1)->first();
//        Mail::to($admin)->send(new NewUserCreated($user));


        if ($user) {
            return redirect()->route('loginView');
        } else {
            return redirect()->back()->withErrors(['message' => 'Error during registration']);
        }
    }

    public function deleteUser(Request $request,User $user){

        $user->delete();

        return redirect(route('AdminDashboardView'));
    }


}
