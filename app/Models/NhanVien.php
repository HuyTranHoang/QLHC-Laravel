<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class NhanVien extends Authenticatable
{
    use HasFactory;

    protected $guard = "nhanvien";
    protected  $primaryKey = 'maNV';

    protected $fillable = ['tenNV','maPhong','maCV','userName','password','gioiTinh','ngaySinh','hinh'];

    protected $hidden = [
        'password',
    ];

    public function PhongBan() {
        return $this->belongsTo(PhongBan::class,'maPhong','maPhong');
    }

    public function ChucVu() {
        return $this->belongsTo(ChucVu::class,'maCV','maCV');
    }

    public function TongNgayNghi() {
        return $this->hasMany(TongNgayNghi::class,'maNV','maNV');
    }

    public function PhieuNghi() {
        return $this->hasMany(PhieuNghi::class,'maNV','maNV');
    }

}
