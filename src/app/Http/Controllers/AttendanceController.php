<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Rest;

class AttendanceController extends Controller
{
    public function index(){
        $work = Attendance::all();
        return view('/');
    }
    public function startWork(){
        echo "startWork";
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
