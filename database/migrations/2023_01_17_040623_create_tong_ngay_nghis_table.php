<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tong_ngay_nghis', function (Blueprint $table) {
            $table->id('maPhep');
            $table->unsignedBigInteger('maNV');
            $table->integer('soNgayHienTai');
            $table->integer('tongSoNgay');
            $table->integer('nam');
            $table->string('ghiChu');
            $table->timestamps();

            $table->foreign('maNV')->references('maNV')->on('nhan_viens')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tong_ngay_nghis');
    }
};
