<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ChucVu;
use App\Models\NhanVien;
use App\Models\PhongBan;
use Database\Factories\PhongBanFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

         PhongBan::factory(5)->create();
         ChucVu::factory(5)->create();
//
//         $phongBan = PhongBan::factory()->create();
//         $ChucVu = ChucVu::factory()->create();
//
//         NhanVien::factory(5)->create([
//             'maPhong' => $phongBan->maPhong,
//             'maCV' => $ChucVu->maCV
//         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
