<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    // protected $table = 'barang';

    protected $fillable = [
        'nama_barang',
        'berat',
        'keterangan',
        'foto',
        'storage_id',
    ];

    public function storage()
    {
        return $this->belongsTo(Storage::class);
    }

    public function riwayat()
    {
        return $this->hasOne(Riwayat::class);
    }
}
