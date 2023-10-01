<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    public function produk()
    {

        return $this->belongsTo(produk::class);
    }

    protected $fillable = [
        'nama_kategori',
    ];
}
