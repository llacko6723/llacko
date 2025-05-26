<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedule = new Schedule();
        $schedule->worker_id = 1;
        $schedule->service_id = 1;
        $schedule->datum = "2025-05-02";
        $schedule->status = "Otkazano";
        $schedule->save();

        $schedule = new Schedule();
        $schedule->worker_id = 2;
        $schedule->service_id = 2;
        $schedule->datum = "2025-06-09";
        $schedule->status = "Zakazano";
        $schedule->save();

        $schedule = new Schedule();
        $schedule->worker_id = 1;
        $schedule->service_id = 3;
        $schedule->datum = "2025-06-09";
        $schedule->status = "Zakazano";
        $schedule->save();

        $schedule = new Schedule();
        $schedule->worker_id = 2;
        $schedule->service_id = 1;
        $schedule->datum = "2025-06-09";
        $schedule->status = "Zakazano";
        $schedule->save();

        $schedule = new Schedule();
        $schedule->worker_id = 3;
        $schedule->service_id = 5;
        $schedule->datum = "2024-06-19";
        $schedule->status = "Izvršeno";
        $schedule->save();

        $schedule = new Schedule();
        $schedule->worker_id = 1;
        $schedule->service_id = 1;
        $schedule->datum = "2024-06-19";
        $schedule->status = "Zakazano";
        $schedule->save();

        $schedule = new Schedule();
        $schedule->worker_id = 2;
        $schedule->service_id = 5;
        $schedule->datum = "2025-10-20";
        $schedule->status = "Zakazano";
        $schedule->save();

        $schedule = new Schedule();
        $schedule->worker_id = 3;
        $schedule->service_id = 2;
        $schedule->datum = "2025-10-20";
        $schedule->status = "Zakazano";
        $schedule->save();

    }
}
