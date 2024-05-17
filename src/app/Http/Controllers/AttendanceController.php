<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Attendance;
use App\Models\Rest;

class AttendanceController extends Controller
{
    public function index(){
        return view('index');

    }

    public function startWork(Request $request){
        $user = Auth::user()->id;
        //$Timestamp = Attendance::where('user_id', $user->id)->latest()->first();
        
        //if ($Timestamp) {
        //    $TimestampStartWork = new Carbon($Timestamp->startWork);
        //    $TimestampDay = $TimestampStartWork->startOfDay();
        //}
        //$newTimestampDay = Carbon::today();

        //データ追加機能
        $users = User::all();
        $form = [
            'name' => $request->user_id,
            'date' => $request->date,
            'work_start' => $request->work_start,
        ];
        Attendance::create($form);
        return redirect('/');
    }

    public function show(){
        $users = Attendance::with('user')->paginate(5);
        $attendances = Attendance::all();
        $rests = Rest::all();
        return view('attendance', compact('users', 'attendances', 'rests'));
    }
}
