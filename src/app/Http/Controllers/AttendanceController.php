<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Rest;

class AttendanceController extends Controller
{
    public function index(){
     return view('index');
    }
    public function startWork(){
        $user = Auth::user();

        $oldTimestamp = Timestamp::where('user_id', $user->id)->latest()->first();
        if ($oldTimestamp) {
            $oldTimestampStartWork = new Carbon($oldTimestamp->punchIn);
            $oldTimestampDay = $oldTimestampStartWork->startOfDay();
        }

        $entry->start_time
    }

    public function show(){
        return view('attendance');
    }
}
