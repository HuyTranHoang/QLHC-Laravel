<?php

use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\PhongBanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/home');
});


//Phòng Ban
Route::get('/admin/phongban',[PhongBanController::class,'index']);
Route::post('/admin/phongban',[PhongBanController::class,'store']);
Route::get('/admin/phongban/{phongban}/edit',[PhongBanController::class,'edit']);
Route::put('/admin/phongban/{phongban}',[PhongBanController::class,'update']);
Route::delete('/admin/phongban/{phongban}',[PhongBanController::class,'destroy']);
Route::get('/admin/phongban/{phongban}',[PhongBanController::class,'show']);

//Chức Vụ
Route::get('/admin/chucvu',[ChucVuController::class,'index']);
Route::post('/admin/chucvu',[ChucVuController::class,'store']);
Route::get('/admin/chucvu/{chucvu}/edit',[ChucVuController::class,'edit']);
Route::put('/admin/chucvu/{chucvu}',[ChucVuController::class,'update']);
Route::delete('/admin/chucvu/{chucvu}',[ChucVuController::class,'destroy']);
Route::get('/admin/chucvu/{chucvu}',[ChucVuController::class,'show']);
