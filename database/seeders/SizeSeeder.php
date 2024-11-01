<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Size; // Import the Size model

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array of selected size data
        $sizes = [
            ['name' => 'S'],   // Small
            ['name' => 'M'],   // Medium
            ['name' => 'L'],   // Large
            ['name' => 'XL'],  // Extra Large
        ];

        // Loop through each size and create them in the database
        foreach ($sizes as $size) {
            Size::create($size);
        }
    }
}
