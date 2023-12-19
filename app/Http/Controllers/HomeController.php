<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    // @auth
    // <h2>{{Auth::user()->id}}</h2>
    // @endauth
    public function updateAccount(Request $request, User $user){
        // $request->validate(
        //     [
        //         "oldName" => "required",
        //         "oldLogin" => "required|unique:users",

        //         "email" => "required|unique:users|email",
        //         "password"=>"required"
        //     ],
        //     [
        //         "oldName.required" => "Поле обязательно для заполнения",
        //         "oldLogin.required" => "Поле обязательно для заполнения",
        //         "oldLogin.unique" => "Данный логин занят",

        //         "email.required" => "Поле обязательно для заполнения",
        //         "email.email" => "Введите правильный адрес",
        //         "email.unique" => "Данный адрес занят",

        //         "password.required" => "Поле обязательно для заполнения"
        //     ]
        // );

        // $upAccount = $request->all();
        $user->update([
        'name' => $request->oldName,
        'login' => $request->oldLogin,
        'email' => $request->email,
        'password' => $request->password,
        ]);
        // $infoNew = Post::find($upAccount['id']);
        // $photoAccount = $request->file('imgAccount');
        //     if(isset($photoAccount)){
        //         $name = $request->file('imgAccount')->hashName();
        //         $path = $request->file('imgAccount')->store('public/images');
        //         $infoNew->image = $name;
        //     }
        // $infoNew->name = $upAccount['oldName'],
        // $infoNew->login => $upAccount['oldLogin'],
        // $infoNew->email => $upAccount['email'],
        // $infoNew->numPhone => $upAccount['numPhone'],
        // $infoNew->password => Hash::make($upAccount['password']),
        // $infoNew->save();


        return redirect('/account');
    }
}
