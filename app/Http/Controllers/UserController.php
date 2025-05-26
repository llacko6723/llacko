<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listu(){
        $all_users = User::all();
        return view("admin.users.list", [
            "users" => $all_users,
        ]);
    }

    public function create() {
        return view("admin.users.create");
    }

    public function store(Request $request) {
        if (empty($request->ime) or empty($request->email) or empty($request->password)){
            return redirect()->back()->with("error", "Morate popuniti sva polja!");
        }

        $exists = User::where('email', $request->email)->exists();

        if ($exists) {
            return redirect('/admin/listu')->with('info', 'Email već postoji!');
        }
    
        
        User::create([
            "ime" => $request->ime,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "role_id" => $request->role_id,
        ]);

        return redirect(url("/admin/listu"))->with("success", "Korisink je uspesno dodat!");
    }

    public function edit($id){
        $user = User::find($id);
        return view("admin.users.edit", [
            "user" => $user
        ]);
    }

    public function update(Request $request, $id){
        if (empty($request->ime) or empty($request->email)){
            return redirect()->back()->with("error", "Podaci ne smeju da ostanu prazni!");
        }

        $user = User::find($id);
        $user->ime = $request->ime;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->save();

        return redirect(url("/admin/listu"))->with("success", "Uspesno ste izmenili korisnika!");
    }
        
    public function delete($id){
        return view("admin.users.delete",[
            "id" => $id,
            "user" => User::findOrFail($id)
        ]);
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect(url("/admin/listu"))->with("success", "Korisnik je uspesno obrisan iz baze!");
        
    }
    
}
