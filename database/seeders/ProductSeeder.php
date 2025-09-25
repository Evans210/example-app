<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Product::create([
            'name' => 'Mystery USB 8GB',
            'description' => 'A random USB drive with 8GB storage.',
            'price' => 5.99,
            'image' => 'usb1.jpg'
        ]);
    }
}
