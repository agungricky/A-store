<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class storage extends Model
{
    // protected $table = 'storages';

    protected $fillable = [
        'brand',
        'user_id',
        'icon_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class);
    }
}
