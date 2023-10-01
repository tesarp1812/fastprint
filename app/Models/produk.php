<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    public function status()
    {

        return $this->hasOne(status::class);
    }
    public function kategori()
    {

        return $this->hasOne(kategori::class);
    }

    protected $primaryKey = 'id_produk';


    protected $fillable = [
        'nama_produk',
        'harga',
        'kategori_id',
        'status_id'
    ];
}
