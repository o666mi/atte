<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [LoginUserController::class],'show');
Route::post('/login', [LoginUserController::class],'login');
Route::post('/logout', [LoginUserController::class],'logout');

Route::get('/', [AttendanceController::class],'index')
Route::post('/attendance/start', [AttendanceController::class],'startWork')
Route::post('/attendance/end', [AttendanceController::class],'endWork')
Route::post('/rest/start', [AttendanceController::class],'startRest')
Route::post('/rest/end', [AttendanceController::class],'endRest')
Route::get('/attendance', [AttendanceController::class],'show')

Route::get('/', function () {
    return view('welcome');
});
