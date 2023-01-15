<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChucVu extends Model
{
    use HasFactory;

    protected  $primaryKey = 'maCV';

    protected $fillable = ['chucVu'];

    public function NhanVien() {
        return $this->hasMany(NhanVien::class);
    }
}
