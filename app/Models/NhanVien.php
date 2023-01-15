<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;

    protected  $primaryKey = 'maNV';

    protected $fillable = ['tenNV','maPhong','maCV','userName','password','gioiTinh','ngaySinh','hinh'];

    public function PhongBan() {
        return $this->belongsTo(PhongBan::class,'maPhong','maPhong');
    }

    public function ChucVu() {
        return $this->belongsTo(ChucVu::class,'maCV','maCV');
    }

}
