<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;
    protected $table = 'metode_pembayarans';
    protected $primaryKey = 'id_metode';

    protected $fillable = ['nama_metode', 'deskripsi_metode'];

    public function pembayarans()
    {
        return $this->hasMany(Pembayaran::class, 'id_metodepembayaran');
    }
}
