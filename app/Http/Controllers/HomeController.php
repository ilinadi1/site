<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    @auth
    <h2>{{Auth::user()->id}}</h2>
    @endauth
    public function updateAccount(Request $request){
        $request->validate(
            [
                "oldName" => "required",
                "oldLogin" => "required|unique:users",
                "dateBirthday" => "required",
                "email" => "required|unique:users|email",
                "numPhone"=>"required",
                "password"=>"required"
            ],
            [
                "oldName.required" => "Поле обязательно для заполнения",
                "oldLogin.required" => "Поле обязательно для заполнения",
                "oldLogin.unique" => "Данный логин занят",
                "dateBirthday.required" => "Поле обязательно для заполнения",
                "email.required" => "Поле обязательно для заполнения",
                "email.email" => "Введите правильный адрес",
                "email.unique" => "Данный адрес занят",
                "numPhone.required" => "Поле обязательно для заполнения",
                "password.required" => "Поле обязательно для заполнения"
            ]
        );
        $upAccount = $request->all();
        $infoNew = Post::find($upAccount['id']);
        $photoAccount = $request->file('imgAccount');
            if(isset($photoAccount)){
                $name = $request->file('imgAccount')->hashName();
                $path = $request->file('imgAccount')->store('public/images');
                $infoNew->image = $name;
            }
        $infoNew->name = $upAccount['oldName'],
        $infoNew->login => $upAccount['oldLogin'],
        $infoNew->email => $upAccount['email'],
        $infoNew->numPhone => $upAccount['numPhone'],
        $infoNew->password => Hash::make($upAccount['password']),
        $infoNew->save();
        return redirect('/account');

    }
}
