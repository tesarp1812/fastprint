<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Produk::create([
            'nama_produk' => 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)',
            'harga' => '10000',
            'kategori_id' => '1',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)',
            'harga' => '10000',
            'kategori_id' => '1',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)',
            'harga' => '1500',
            'kategori_id' => '1',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM',
            'harga' => '1500',
            'kategori_id' => '1',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM',
            'harga' => '1500',
            'kategori_id' => '1',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)',
            'harga' => '1000',
            'kategori_id' => '1',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)',
            'harga' => '1000',
            'kategori_id' => '1',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)',
            'harga' => '1500',
            'kategori_id' => '1',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)',
            'harga' => '1000',
            'kategori_id' => '1',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)',
            'harga' => '1500',
            'kategori_id' => '1',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM',
            'harga' => '1000',
            'kategori_id' => '2',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM',
            'harga' => '1000',
            'kategori_id' => '2',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM',
            'harga' => '12500',
            'kategori_id' => '2',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM',
            'harga' => '12500',
            'kategori_id' => '2',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM',
            'harga' => '1000',
            'kategori_id' => '2',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM',
            'harga' => '13000',
            'kategori_id' => '2',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'ALUMUNIUM FOIL PET SHEET 250mm IM',
            'harga' => '1000',
            'kategori_id' => '2',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'ARM PENDEK MODEL U',
            'harga' => '13000',
            'kategori_id' => '2',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'ARM SUPPORT KOTAK PUTIH',
            'harga' => '13000',
            'kategori_id' => '2',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'ARM SUPPORT S IM',
            'harga' => '1000',
            'kategori_id' => '2',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'ARM SUPPORT T (IMPORT)',
            'harga' => '13000',
            'kategori_id' => '2',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'BLACK LASER TONER FP-T3 (100gr)',
            'harga' => '13000',
            'kategori_id' => '2',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'ARM SUPPORT KECIL',
            'harga' => '13000',
            'kategori_id' => '3',
            'status_id' => '2',
        ]);
        Produk::create([
            'nama_produk' => 'BOTOL KOTAK 100ML LK',
            'harga' => '1000',
            'kategori_id' => '3',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'ARM SUPPORT PENDEK POLOS',
            'harga' => '13000',
            'kategori_id' => '4',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'ARM SUPPORT T - MODEL 1 ( LOKAL )',
            'harga' => '10000',
            'kategori_id' => '4',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'ALCOHOL GEL POLISH CLEANSER GP-CLN01',
            'harga' => '10000',
            'kategori_id' => '5',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'BOTOL 10ML IM',
            'harga' => '1000',
            'kategori_id' => '6',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'BODY PRINTER CANON IP2770',
            'harga' => '500',
            'kategori_id' => '7',
            'status_id' => '1',
        ]);
        Produk::create([
            'nama_produk' => 'BODY PRINTER T13X',
            'harga' => '15000',
            'kategori_id' => '7',
            'status_id' => '1',
        ]);
    }
}
