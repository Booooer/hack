<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function auth(Request $request){
        $user = User::where('login',$request->login)->where('password',$request->password)->first();

        if (isset($user)) {
            Auth::login($user);
            return view('profile',compact('user'));
        }
        return "sdsd";
    }
}
