<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    // one to one
    public function barang()
    {
        return $this->hasOne(Barang::class);
    }

    // one to many
    //public function barangs()
    //{
    //   return $this->hasOne(Barang::class);
    //}
}