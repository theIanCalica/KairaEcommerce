<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Import the Product model
use App\Models\Size;    // Import the Size model

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all products and sizes
        $products = Product::all();
        $sizes = Size::all();

        // Check if products and sizes exist
        if ($products->isEmpty() || $sizes->isEmpty()) {
            echo "No products or sizes available to associate.\n";
            return;
        }

        // Loop through each product and associate it with random sizes
        foreach ($products as $product) {
            // Randomly attach between 1 to 3 sizes to each product
            $randomSizes = $sizes->random(rand(1, 3))->pluck('id');
            $product->sizes()->attach($randomSizes);
        }
    }
}
