<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pembayaran::firstOrCreate([
            'id_siswa' => '1',
            'id_detailpembayaran' => '1',
            'id_metodepembayaran' => '1',
            'jumlah_pembayaran' => '100000',
            'tanggal_pembayaran' => '2024-11-01',
            'metod_pembayaran' => 'Transfer Bank',
            'status' => 'Lunas',
        ]);

        Pembayaran::firstOrCreate([
            'id_siswa' => '2',
            'id_detailpembayaran' => '2',
            'id_metodepembayaran' => '2',
            'jumlah_pembayaran' => '15000',
            'tanggal_pembayaran' => '2024-11-05',
            'metod_pembayaran' => 'Tunai',
            'status' => 'Lunas',
        ]);

        Pembayaran::firstOrCreate([
            'id_siswa' => '3',
            'id_detailpembayaran' => '3',
            'id_metodepembayaran' => '3',
            'jumlah_pembayaran' => '200000',
            'tanggal_pembayaran' => '2024-11-10',
            'metod_pembayaran' => 'Transfer Bank',
            'status' => 'Belum Lunas',
        ]);
    }
}