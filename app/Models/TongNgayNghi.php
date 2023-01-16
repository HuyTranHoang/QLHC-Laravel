<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TongNgayNghi extends Model
{
    use HasFactory;

    protected  $primaryKey = 'maPhep';

    protected $fillable = ['maNV','soNgayHienTai','tongSoNgay','nam','ghiChu'];

    public function NhanVien() {
        return $this->belongsTo(NhanVien::class,'maNV','maNV');
    }
}
