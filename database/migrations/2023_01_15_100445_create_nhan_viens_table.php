<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->id('maNV');
            $table->unsignedBigInteger('maPhong');
            $table->unsignedBigInteger('maCV');
            $table->string('tenNV');
            $table->string('userName');
            $table->string('password');
            $table->boolean('gioiTinh');
            $table->date('ngaySinh');
            $table->string('hinh');
            $table->timestamps();

            $table->foreign('maPhong')->references('maPhong')->on('phong_bans')
            ->onDelete('cascade');

            $table->foreign('maCV')->references('maCV')->on('chuc_vus')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhan_viens');
    }
};
