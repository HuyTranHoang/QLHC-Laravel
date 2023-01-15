<?php

use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\NhanViensController;
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
    return view('login');
});

Route::get('/admin', function () {
    return view('admin/home')->with('title', 'Quản Lý Hành Chính');
});


//Phòng Ban
Route::get('/admin/phongban', [PhongBanController::class, 'index']);
Route::post('/admin/phongban', [PhongBanController::class, 'store']);
Route::get('/admin/phongban/{phongBan}/edit', [PhongBanController::class, 'edit']);
Route::put('/admin/phongban/{phongBan}', [PhongBanController::class, 'update']);
Route::delete('/admin/phongban/{phongBan}', [PhongBanController::class, 'destroy']);
Route::get('/admin/phongban/{phongBan}', [PhongBanController::class, 'show']);

//Chức Vụ
Route::get('/admin/chucvu', [ChucVuController::class, 'index']);
Route::post('/admin/chucvu', [ChucVuController::class, 'store']);
Route::get('/admin/chucvu/{chucVu}/edit', [ChucVuController::class, 'edit']);
Route::put('/admin/chucvu/{chucVu}', [ChucVuController::class, 'update']);
Route::delete('/admin/chucvu/{chucVu}', [ChucVuController::class, 'destroy']);
Route::get('/admin/chucvu/{chucVu}', [ChucVuController::class, 'show']);

//Nhân Viên
Route::get('/admin/nhanvien', [NhanViensController::class, 'index']);
Route::get('/admin/nhanvien/create', [NhanViensController::class, 'create']);
Route::post('/admin/nhanvien', [NhanViensController::class, 'store']);
Route::get('/admin/nhanvien/{nhanVien}/edit', [NhanViensController::class, 'edit']);
Route::put('/admin/nhanvien/{nhanVien}', [NhanViensController::class, 'update']);
Route::delete('/admin/nhanvien/{nhanVien}', [NhanViensController::class, 'destroy']);
Route::get('/admin/nhanvien/{nhanVien}', [NhanViensController::class, 'show']);
