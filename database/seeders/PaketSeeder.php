<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paket')->insert([
            [
                'jenis' => 'kiloan',
                'harga' => 7000, // per kg
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis' => 'selimut',
                'harga' => 15000, // per item
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis' => 'bed_cover',
                'harga' => 20000, // per item
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis' => 'kaos',
                'harga' => 5000, // per item
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
