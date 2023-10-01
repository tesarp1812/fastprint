<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //input kategori
        Kategori::create([
            'nama_kategori' => 'CI MTH TINTA LAIN (IM)'
        ]);
        Kategori::create([
            'nama_kategori' => 'L MTH AKSESORIS (IM)'
        ]);
        Kategori::create([
            'nama_kategori' => 'L MTH AKSESORIS (LK)'
        ]);
        Kategori::create([
            'nama_kategori' => 'L MTH TABUNG (LK)'
        ]);
        Kategori::create([
            'nama_kategori' => 'L QUEENLY'
        ]);
        Kategori::create([
            'nama_kategori' => 'S MTH STEMPEL (IM)'
        ]);
        Kategori::create([
            'nama_kategori' => 'SP MTH SPAREPART (LK)'
        ]);
    }
}
