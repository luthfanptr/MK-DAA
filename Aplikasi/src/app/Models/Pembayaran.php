<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $primaryKey = 'id_pembayaran';

    protected $fillable = ['jumlah_pembayaran', 'tanggal_pembayaran', 'metode_pembayaran', 'status'];
    // Many to one ke Detail Pembayaran
    public function detailpembayarans()
    {
        return $this->belongsTo(DetailPembayaran::class, 'id_pembayaran');
    } 
    public function metodepembayarans()
    {
        return $this->belongsTo(MetodePembayaran::class, 'id_metodepembayaran');
    }
    public function siswas()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
