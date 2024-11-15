<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MetodePembayaran;

class MetodePembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MetodePembayaran::firstOrCreate([
          'nama_metode' => 'Transfer Bank',
          'deskripsi_metode' => 'Pembayaran dilakukan melalui transfer bank ke rekening sekolah',
        ]);

        MetodePembayaran::firstOrCreate([
            'nama_metode' => 'Tunai',
            'deskripsi_metode' => 'Pembayaran dilakukan secara langsung di sekolah',
          ]);

        MetodePembayaran::firstOrCreate([
            'nama_metode' => 'E-Wallet',
            'deskripsi_metode' => 'Pembayaran dilakukan melalui dompet digital ke rekening sekolah',
          ]);
    }
}
