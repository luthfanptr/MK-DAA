<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPembayaran extends Model
{
    use HasFactory;
    protected $table = 'detail_pembayarans';
    protected $primaryKey = 'id_detail';

    protected $fillable = ['jenis_biaya', 'nominal', 'deskripsi', 'jatuh_tempo'];

    public function pembayarans(){
        return $this->hasMany(Pembayaran::class, 'id_detailpembayaran');
    }
}
