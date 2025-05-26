<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function notAuth(){
        return view("auth.not-auth");
    }

    public function login() {
        return view("auth.login");
    }

    public function storeLogin(Request $request) {
        if (empty($request->email) or empty($request->password)){
            return redirect()->route("login")->with("error", "Morate da popunite sva polja!");
        }

        if (Auth::attempt($request->only("email", "password"))){
            return redirect()->route("admin.dashboard");
        }

        return redirect()->route("login")->with("error", "Nepostojeci podaci za logovanje");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("login");
    }

    public function register(){
        return view("auth.register");
    }

    public function storeRegister(Request $request){
        $request->validate([
            "ime" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:4"
        ]);

        // ako je sva validacija prosla onda mozemo da kreiramo korisnika
        User::create([
            "ime" => $request->ime,
            "email" => $request->email,
            "password" => $request->password,
            "role_id" => 2, // automatski je obican user
        ]);
        return redirect()->route("login")->with("success", "Registracija je uspesna!");
    }
}
