<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaanServis extends Model
{
    use HasFactory;

    protected $table = 'pekerjaan_servis';

    protected $fillable = [
        'antrian_id',
        'deskripsi_pekerjaan',
        'biaya_pekerjaan',
    ];

    public function antrian()
    {
        return $this->belongsTo(Antrian::class);
    }
}
