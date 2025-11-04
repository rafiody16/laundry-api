<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetilTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contoh data detil transaksi (pastikan id_transaksi dan id_paket sudah ada)
        DB::table('detil_transaksi')->insert([
            [
                'id_transaksi' => 1,
                'id_paket' => 1, // kiloan
                'weight' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_transaksi' => 1,
                'id_paket' => 3, // bed_cover
                'weight' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_transaksi' => 2,
                'id_paket' => 2, // selimut
                'weight' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_transaksi' => 3,
                'id_paket' => 4, // kaos
                'weight' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_transaksi' => 4,
                'id_paket' => 1,
                'weight' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_transaksi' => 5,
                'id_paket' => 3,
                'weight' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
