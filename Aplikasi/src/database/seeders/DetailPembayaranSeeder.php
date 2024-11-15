<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailPembayaran;

class DetailPembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailPembayaran::firstOrCreate([
            'jenis_biaya' => 'Uang SPP',
            'nominal' => '100000',
            'deskripsi' => 'Biaya SPP bulan November',
            'jatuh_tempo' => '2024-11-08',
        ]);

        DetailPembayaran::firstOrCreate([
            'jenis_biaya' => 'Uang Buku',
            'nominal' => '75000',
            'deskripsi' => 'Biaya Buku Pelajaran',
            'jatuh_tempo' => '2024-11-30',
        ]);

        DetailPembayaran::firstOrCreate([
            'jenis_biaya' => 'Uang Seragam',
            'nominal' => '200000',
            'deskripsi' => 'Biaya Seragam',
            'jatuh_tempo' => '2024-11-30',
        ]);
    }
}
