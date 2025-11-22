<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder  // HARUS extends Seeder, bukan ProductSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nama' => 'Hijab Polos',
            'harga' => 50000,
            'stok' => 10,
        ]);

        Product::create([
            'nama' => 'Hijab Motif',
            'harga' => 70000,
            'stok' => 5,
        ]);
    }
}
