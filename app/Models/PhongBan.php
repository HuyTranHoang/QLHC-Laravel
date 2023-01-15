<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongBan extends Model
{
    use HasFactory;

    protected  $primaryKey = 'maPhong';

    protected $fillable = ['tenPhong','vietTat','ghiChu'];

    public function NhanVien() {
        return $this->hasMany(NhanVien::class);
    }
}
