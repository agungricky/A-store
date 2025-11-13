<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $fillable = [
        'user_id',
        'barang_id',
        'storage_id',
        'berat',
        'keterangan',
    ];

    public function barang()
    {
        return $this->belongsTo(barang::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function storage()
    {
        return $this->belongsTo(storage::class);
    }
}
