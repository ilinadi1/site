<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function registration(Request $request)
    {
        $request->validate(
            [
                "name" => "required",
                "login" => "required|unique:users",
                "dateBirthday" => "required",
                "phone" => "required",
                "email" => "required|unique:users|email",
                "password" => "required",
                "confirm" => "required|same:password"
            ],
            [
                "name.required" => "Поле обязательно для заполнения",
                "login.required" => "Поле обязательно для заполнения",
                "login.unique" => "Данный логин занят",
                "email.required" => "Поле обязательно для заполнения",
                "email.email" => "Введите правильный адрес",
                "email.unique" => "Данный адрес занят",
                "password.required" => "Поле обязательно для заполнения",
                "confirm.required" => "Поле обязательно для заполнения",
            ]);
            $regstr = $request->all();
            User::create([
                "name" => $regstr['name'],
                "login" => $regstr['login'],
                "email" => $regstr['email'],
                "password" => Hash::make($regstr['password']),
            ]);
            return redirect("/")->with("succes", "Успешная регистрация");
    }
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required"
        ], [
            "email.required" => "Поле обязательно для заполнения",
            "password.required" => "Поле обязательно для заполнения",
        ]);

        $user = $request->only("email", "password");
        if (Auth::attempt([
            "email"=>$user['email'],
            "password"=>$user['password']
        ])) {
            if (Auth::user()->id_role == 1) {
                return redirect("/");
            } else {
                return redirect("/")->with("succes", "");
            }
        }else{
            return redirect()->back()->with("error","Неверная почта или пароль");
        }

    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect("/");
    }

}
