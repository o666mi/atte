<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Rest;

class AttendanceController extends Controller
{
    public function index(){
            $isWork_start = false;
            $isWork_end = true;
            $isRest_start = true;
            $isRest_end = true;
        return view('index',compact('isWork_start','isWork_end','isRest_start','isRest_end'));
    }

    public function startWork(Request $request){
        $userId = Auth::id();

        //データ追加機能
        $attendance = new Attendance(); // $attendance を初期化
        $attendance->user_id = $userId;
        $attendance->date = date('Y-m-d'); // 今日の日付
        $attendance->work_start = now(); // 今の時間
        $attendance->work_end = now();
        $isWork_start = true;
        $isWork_end = false;
        $attendance->save();
        
        return redirect('/',compact('isWork_start','isWork_end'));
    }

    public function endWork(Request $request){
        $userId = Auth::id();

        $attendance->work_end = now();
        unset($attendance['_token']);
        Author::find($userId->id)->update($attendance);
        return redirect('/');
    }

    public function show(){
        $users = Attendance::with('user:id,name')->paginate(5);
        $attendances = Attendance::all();
        $rests = Rest::all();
        return view('attendance', compact('users', 'attendances', 'rests'));
    }
}
