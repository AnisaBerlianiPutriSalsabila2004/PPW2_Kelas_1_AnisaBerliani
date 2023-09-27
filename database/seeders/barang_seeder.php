<?php

namespace Database\Seeders;

use App\Models\barang_models;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barang_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        barang_models::factory(10)->create();
    }
}
