<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhieuNghi extends Model
{
    protected  $primaryKey = 'maPhieu';

    protected $fillable = ['maNV','tongSoNgay','tuBuoi','denBuoi','tuNgay','denNgay','loaiPhep','ghiChu','nguoiDuyet','trangThai','ngayDuyet'];

    public function NhanVien() {
        return $this->belongsTo(NhanVien::class,'maNV','maNV');
    }

}
