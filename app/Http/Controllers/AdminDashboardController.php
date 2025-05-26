<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule; 
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function dashboard() {
        $data = DB::table('schedules')
            ->selectRaw('DATE(datum) as datum, COUNT(*) as broj')
            ->groupBy('datum')
            ->orderBy('datum', 'asc')
            ->get();
    
        return view('admin.dashboard', compact('data'));
    }
}