<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color; // Import the Color model

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array of color data
        $colors = [
            ['name' => 'Red'],
            ['name' => 'Blue'],
            ['name' => 'Green'],
            ['name' => 'Black'],
            ['name' => 'White'],
            ['name' => 'Yellow'],
            ['name' => 'Purple'],
            ['name' => 'Orange'],
            ['name' => 'Gray'],
            ['name' => 'Pink'],
            ['name' => 'Brown'],
            ['name' => 'Cyan'],
            ['name' => 'Magenta'],
            ['name' => 'Navy'],
            ['name' => 'Teal'],
        ];

        // Loop through each color and create them in the database
        foreach ($colors as $color) {
            Color::create($color);
        }
    }
}
