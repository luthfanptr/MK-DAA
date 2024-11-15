<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $primaryKey = 'id_siswa';

    protected $fillable = ['nama', 'kelas', 'alamat', 'no_telepon'];
    // one to many ke pembayaran
    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_siswa');
    }
}
