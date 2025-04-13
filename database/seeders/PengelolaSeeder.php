<?php

namespace Database\Seeders;

use App\Models\Pengelola;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PengelolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengelola::create([
            'nama' => 'Super Admin',
            'username' => 'superadmin',
            'password' => Hash::make('superadmin@123'), // Ganti dengan password yang sesuai
            'role' => 'super_admin',
        ]);

        Pengelola::create([
            'nama' => 'Super Admin',
            'username' => 'admin',
            'password' => Hash::make('admin@123'), // Ganti dengan password yang sesuai
            'role' => 'admin',
        ]);

        Pengelola::create([
            'nama' => 'Koordinator Divisi',
            'username' => 'kodiv',
            'password' => Hash::make('kodiv@123'), // Ganti dengan password yang sesuai
            'role' => 'kodiv',
        ]);
    }
}
