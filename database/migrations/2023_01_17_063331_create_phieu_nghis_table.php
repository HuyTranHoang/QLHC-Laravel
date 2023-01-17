<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('phieu_nghis', function (Blueprint $table) {
            $table->id('maPhieu');
            $table->unsignedBigInteger('maNV');
            $table->integer('tongSoNgay');
            $table->string('tuBuoi');
            $table->string('denBuoi');
            $table->date('tuNgay');
            $table->date('denNgay');
            $table->tinyInteger('loaiPhep');
            $table->string('ghiChu');
            $table->unsignedBigInteger('nguoiDuyet')->nullable();
            $table->tinyInteger('trangThai');
            $table->date('ngayDuyet');
            $table->timestamps();

            $table->foreign('maNV')->references('maNV')->on('nhan_viens')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('phieu_nghis');
    }
};
