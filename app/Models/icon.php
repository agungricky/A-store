<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class icon extends Model
{
    // protected $table = 'icons';
    protected $fillable = [
        'label',
        'lokasi',
    ];

    public function storages()
    {
        return $this->hasMany(storage::class);
    }
}
