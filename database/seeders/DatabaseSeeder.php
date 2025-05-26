<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ServiceSeeder::class,
        ]);

        $this->call([
            WorkerSeeder::class,
        ]);

        $this->call([
            ScheduleSeeder::class,
        ]);

        $this->call([
            RoleSeeder::class,
        ]);

        $this->call([
            UserSeeder::class,
        ]);
    }
}
