<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function show(){
        $user = Auth::user();

        return view('profile',compact('user'));
    }

    public function auth(Request $request){
        $user = User::where('login',$request->login)->where('password',$request->password)->first();

        if (isset($user)) {
            Auth::login($user);
            return view('profile',compact('user'));
        }
        return back()->withErrors(['message' => 'Авторизация не удалась!']);
    }

    public function addUser(){
        $data = json_decode(file_get_contents("php://input"));

        if ($this->checkUniqueUser($data[0])) {
            User::create([
                'login' => $data[0],
                'password' => $data[1],
                'role' => $data[2],
            ]);

            return json_encode("Пользователь успешно добавлен");
        }
        else{
            return json_encode("Такой пользователь уже есть");
        }
    }

    private function checkUniqueUser($login){
        $check = User::where('login',$login)->first();
        if (isset($check)) {
            return false;
        }
        return true;
    }
}
