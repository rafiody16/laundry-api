<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // === OUTLET JAKARTA ===
            [
                'id_outlet' => 1,
                'nama' => 'Rudi Hartono',
                'username' => 'rudi_admin_jkt',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_outlet' => 1,
                'nama' => 'Siti Maesaroh',
                'username' => 'siti_kasir_jkt',
                'password' => Hash::make('kasir123'),
                'role' => 'kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_outlet' => 1,
                'nama' => 'Dewi Lestari',
                'username' => 'dewi_owner_jkt',
                'password' => Hash::make('owner123'),
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // === OUTLET BANDUNG ===
            [
                'id_outlet' => 2,
                'nama' => 'Agus Saputra',
                'username' => 'agus_admin_bdg',
                'password' => Hash::make('admin456'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_outlet' => 2,
                'nama' => 'Maya Kartika',
                'username' => 'maya_kasir_bdg',
                'password' => Hash::make('kasir456'),
                'role' => 'kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_outlet' => 2,
                'nama' => 'Hendra Wijaya',
                'username' => 'hendra_owner_bdg',
                'password' => Hash::make('owner456'),
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // === OUTLET SURABAYA ===
            [
                'id_outlet' => 3,
                'nama' => 'Lina Marlina',
                'username' => 'lina_admin_sby',
                'password' => Hash::make('admin789'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_outlet' => 3,
                'nama' => 'Budi Santoso',
                'username' => 'budi_kasir_sby',
                'password' => Hash::make('kasir789'),
                'role' => 'kasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_outlet' => 3,
                'nama' => 'Rina Oktaviani',
                'username' => 'rina_owner_sby',
                'password' => Hash::make('owner789'),
                'role' => 'owner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
