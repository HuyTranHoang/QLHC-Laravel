<?php

use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\LoginController;
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

Route::get('/',[NhanViensController::class,'login']) -> name('login');
Route::post('/authenticate',[NhanViensController::class,'authenticate']);
Route::get('admin/logout',[NhanViensController::class,'logout']);



Route::middleware('auth:nhanvien')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin/home')->with('title', 'Quản Lý Hành Chính');
    });
    Route::resources([
        'phongban' => PhongBanController::class,
        'chucvu' => ChucVuController::class,
        'nhanvien' => NhanViensController::class
    ]);
});
