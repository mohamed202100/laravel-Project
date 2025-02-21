<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view("auth.register");
    }

    public function handleRegister(Request $request){

        $data = $request->validate([
            "name"=>["required","string"],
            "email"=> "required|email|unique:users,email",
            "password"=> "required",
        ]);

        $user = User::create([
            "name"=>$data["name"],
            "email"=>$data["email"],
            "password"=>Hash::make($data["password"]),
            ]);
            Auth::login($user);
            return redirect()->route('/');

    }
    public function login(){
        return view('auth.login');
    }


    public function handleLogin(Request $request){

        $data = $request->validate([
            "email"=> "required|email",
            "password"=> "required",
        ]);

        if(!Auth::attempt($data)){
            return back()->withErrors(["email"=> "incorrect",])->withInput($request->only("email"));
            }


        return redirect()->route('auth.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');}

}
