<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Status::create([
            'nama_status' => 'bisa dijual'
        ]);
        Status::create([
            'nama_status' => 'tidak bisa dijual'
        ]);
    }
}
