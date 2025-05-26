<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->ime = "User";
        $user->email = "user@pwa.rs";
        $user->password = Hash::make("user");
        $user->role_id = 2;
        $user->save();

        $user = new User();
        $user->ime = "Admin";
        $user->email = "admin@pwa.rs";
        $user->password = Hash::make("admin");
        $user->role_id = 1;
        $user->save();

        $user = new User();
        $user->ime = "Editor";
        $user->email = "editor@pwa.rs";
        $user->password = Hash::make("editor");
        $user->role_id = 3;
        $user->save();

    }
}
