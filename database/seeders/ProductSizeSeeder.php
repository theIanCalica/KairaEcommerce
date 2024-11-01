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

        // Loop through each product and associate it with at least 3 random sizes
        foreach ($products as $product) {
            // Randomly attach between 3 to the total number of sizes to each product
            $randomSizes = $sizes->random(rand(3, $sizes->count()))->pluck('id');
            $product->sizes()->attach($randomSizes);
        }
    }
}
