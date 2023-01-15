<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;

    protected  $primaryKey = 'maNV';

    protected $fillable = ['tenNV','userName','password','gioiTinh','ngaySinh','hinh','maPhong','maCV'];


    public function PhongBan() {
        return $this->belongsTo(PhongBan::class);
    }

    public function ChucVu() {
        return $this->belongsTo(ChucVu::class);
    }

}
