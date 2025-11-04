<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('member')->insert([
            [
                'nama' => 'Rizky Pratama',
                'alamat' => 'Jl. Merdeka No. 21, Jakarta Pusat',
                'jenis_kelamin' => 'l',
                'tlp' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Nurhaliza',
                'alamat' => 'Jl. Cihampelas No. 14, Bandung',
                'jenis_kelamin' => 'p',
                'tlp' => '082134567891',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Jl. Diponegoro No. 7, Surabaya',
                'jenis_kelamin' => 'l',
                'tlp' => '083134567892',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dewi Kartika',
                'alamat' => 'Jl. Gatot Subroto No. 5, Medan',
                'jenis_kelamin' => 'p',
                'tlp' => '081278945612',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ahmad Fauzan',
                'alamat' => 'Jl. Pahlawan No. 10, Yogyakarta',
                'jenis_kelamin' => 'l',
                'tlp' => '085678912345',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Melati Anggraini',
                'alamat' => 'Jl. Sudirman No. 8, Palembang',
                'jenis_kelamin' => 'p',
                'tlp' => '081233344455',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Hendra Wijaya',
                'alamat' => 'Jl. Imam Bonjol No. 17, Semarang',
                'jenis_kelamin' => 'l',
                'tlp' => '089512345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Putri Maharani',
                'alamat' => 'Jl. Ahmad Yani No. 3, Malang',
                'jenis_kelamin' => 'p',
                'tlp' => '088812345678',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
