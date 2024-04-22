<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Rest;

class AttendanceController extends Controller
{
    public function index(){
        if (Auth::check()) {
            return view('/')
        } else {
            return view('auth/login')
        }
        $work = Attendance::all();
    }
    public function startWork(){
        $user = Auth::user();

        $oldTimestamp = Timestamp::where('user_id', $user->id)->latest()->first();
        if ($oldTimestamp) {
            $oldTimestampPunchIn = new Carbon($oldTimestamp->punchIn);
            $oldTimestampDay = $oldTimestampPunchIn->startOfDay();
        }

    }
    public function endWork(){
        echo "endWork";
    }
    public function startRest(){
        echo "startRest";
    }
    public function endRest(){
        echo "endRest";
    }
    public function show(){
        return view('attendance');
    }
}
