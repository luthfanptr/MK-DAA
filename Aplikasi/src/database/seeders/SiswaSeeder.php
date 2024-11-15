<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create([
            'nama' => 'Panjul',
            'kelas' => '10 IPA',
            'alamat' => 'Jl. Mangga No 111',
            'no_telepon' => '081234567890',
        ]);

        Siswa::create([
            'nama' => 'Andi',
            'kelas' => '11 IPA',
            'alamat' => 'Jl. Jeruk No 7',
            'no_telepon' => '081234567891',
        ]);

        Siswa::create([
            'nama' => 'Nina',
            'kelas' => '11 IPS',
            'alamat' => 'Jl. Dukuh No 10',
            'no_telepon' => '081234567892',
        ]);
    }
}
