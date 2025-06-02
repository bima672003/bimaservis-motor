<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'merek_kendaraan',
        'nomor_plat_kendaraan',
        'jenis_kendaraan',
        'tahun_pembuatan',
    ];

    public function pelanggan()
    {
    return $this->belongsTo(Pelanggan::class);
    }

}
