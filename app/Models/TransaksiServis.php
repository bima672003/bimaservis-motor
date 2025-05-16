<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiServis extends Model
{
    use HasFactory;

    protected $table = 'transaksi_servis';

    protected $fillable = [
        'antrian_id',
        'total_biaya',
        'metode_pembayaran',
        'tanggal_pembayaran',
    ];

    public function antrian()
    {
        return $this->belongsTo(Antrian::class);
    }

    public function pekerjaanServis()
    {
        return $this->hasMany(PekerjaanServis::class, 'antrian_id', 'antrian_id');
    }
}
