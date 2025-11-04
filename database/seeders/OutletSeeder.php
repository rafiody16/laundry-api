<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('outlet')->insert([
            [
                'nama_outlet' => 'Outlet Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_outlet' => 'Outlet Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_outlet' => 'Outlet Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
