<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksi')->insert([
            [
                'id_member' => 1,
                'tgl' => Carbon::now()->subDays(7),
                'batas_waktu' => Carbon::now()->subDays(2),
                'tgl_bayar' => Carbon::now()->subDays(1),
                'status' => 'diambil',
                'dibayar' => 'dibayar',
                'tlp' => '081234567890',
                'id_user' => 2, // kasir
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_member' => 2,
                'tgl' => Carbon::now()->subDays(5),
                'batas_waktu' => Carbon::now()->addDays(1),
                'tgl_bayar' => null,
                'status' => 'proses',
                'dibayar' => 'belum_dibayar',
                'tlp' => '082134567891',
                'id_user' => 4, // kasir lain
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_member' => 3,
                'tgl' => Carbon::now()->subDays(3),
                'batas_waktu' => Carbon::now()->addDays(2),
                'tgl_bayar' => Carbon::now(),
                'status' => 'selesai',
                'dibayar' => 'dibayar',
                'tlp' => '083134567892',
                'id_user' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_member' => 4,
                'tgl' => Carbon::now()->subDays(1),
                'batas_waktu' => Carbon::now()->addDays(3),
                'tgl_bayar' => null,
                'status' => 'baru',
                'dibayar' => 'belum_dibayar',
                'tlp' => '081278945612',
                'id_user' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_member' => 5,
                'tgl' => Carbon::now()->subDays(10),
                'batas_waktu' => Carbon::now()->subDays(4),
                'tgl_bayar' => Carbon::now()->subDays(3),
                'status' => 'diambil',
                'dibayar' => 'dibayar',
                'tlp' => '085678912345',
                'id_user' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_member' => 6,
                'tgl' => Carbon::now()->subDays(2),
                'batas_waktu' => Carbon::now()->addDays(2),
                'tgl_bayar' => null,
                'status' => 'proses',
                'dibayar' => 'belum_dibayar',
                'tlp' => '081233344455',
                'id_user' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
