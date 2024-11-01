<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Import the Product model
use App\Models\Color;   // Import the Color model
use App\Models\Size;    // Import the Size model
use Illuminate\Support\Facades\DB;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all products
        $products = Product::all();
        // Get all colors
        $colors = Color::all();
        // Get sizes S, M, L, XL
        $sizes = Size::whereIn('name', ['S', 'M', 'L', 'XL'])->get();

        foreach ($products as $product) {
            foreach ($colors as $color) {
                foreach ($sizes as $size) {
                    // Insert a record in the color_product pivot table
                    DB::table('color_product')->insert([
                        'product_id' => $product->id,
                        'color_id' => $color->id,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
