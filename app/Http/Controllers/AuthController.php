<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\FinalOrder;
use App\Models\Product;
use App\Models\WorkSpace;


class AuthController extends Controller
{
    public function show()
    {
        $users = User::get();
        $user = Auth::user();
        $products = Product::all();
        $finals = FinalOrder::get();
        $works = WorkSpace::first();

        if (!$user) {
         return view('index');
        }

        return view('profile', compact('users','user','products','finals','works'));
    }

    public function auth(Request $request)
    {
        $user = User::where('login', $request->login)->where('password',$request->password)->first();
        $users = User::get();

        if (isset($user)) {
            Auth::login($user);
            return redirect()->route('profile');
        }
        return back()->withErrors(['message' => 'Авторизация не удалась!']);
    }



    public function addUser()
    {
        $data = json_decode(file_get_contents("php://input"));

        if ($this->checkUniqueUser($data[0])) {
            User::create([
                'login' => $data[0],
                'password' => $data[1],
                'role' => $data[2],
            ]);

            return json_encode("Пользователь успешно добавлен");
        } else {
            return json_encode("Такой пользователь уже есть");
        }
    }

    private function checkUniqueUser($login)
    {
        $check = User::where('login', $login)->first();
        if (isset($check)) {
            return false;
        }
        return true;
    }

    public function updateRole(Request $request)
    {
        User::where('login', $request->login)->update(['role' => $request->role]);
        return redirect()->route('profile');
    }

    public function logout(){
        Auth::logout();

        return view('index');
    }
}
