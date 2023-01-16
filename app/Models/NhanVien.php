<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NhanVien extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected  $primaryKey = 'maNV';

    protected $fillable = ['tenNV','maPhong','maCV','userName','password','gioiTinh','ngaySinh','hinh'];

    public function PhongBan() {
        return $this->belongsTo(PhongBan::class,'maPhong','maPhong');
    }

    public function ChucVu() {
        return $this->belongsTo(ChucVu::class,'maCV','maCV');
    }

}
