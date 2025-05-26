<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $worker = new Worker();
        $worker->ime = "Milos";
        $worker->prezime = "Milosevic";
        $worker->email = "milos@gmail.com";
        $worker->save();

        $worker = new Worker();
        $worker->ime = "Nikola";
        $worker->prezime = "Nikolic";
        $worker->email = "nikola@gmail.com";
        $worker->save();

        $worker = new Worker();
        $worker->ime = "Vuk";
        $worker->prezime = "Vukic";
        $worker->email = "vuk@gmail.com";
        $worker->save();
    }
}
