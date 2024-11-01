<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Loose Fit Printed T-shirt',
                'price' => 19.99,
                'description' => 'T-shirt in midweight cotton jersey with a print motif, round, rib-trimmed neckline, dropped shoulders and a straight-cut hem. Loose fit for a generous but not oversized silhouette.',
                'filepath' => 'images/product1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 2',
                'price' => 29.99,
                'description' => 'A description for Product 2.',
                'filepath' => 'images/sample2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 3',
                'price' => 24.99,
                'description' => 'A description for Product 3.',
                'filepath' => 'images/sample3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 4',
                'price' => 39.99,
                'description' => 'A description for Product 4.',
                'filepath' => 'images/sample4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 5',
                'price' => 49.99,
                'description' => 'A description for Product 5.',
                'filepath' => 'images/sample5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 6',
                'price' => 59.99,
                'description' => 'A description for Product 6.',
                'filepath' => 'images/sample6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 7',
                'price' => 15.99,
                'description' => 'A description for Product 7.',
                'filepath' => 'images/sample7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 8',
                'price' => 32.99,
                'description' => 'A description for Product 8.',
                'filepath' => 'images/sample8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 9',
                'price' => 42.99,
                'description' => 'A description for Product 9.',
                'filepath' => 'images/sample9.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 10',
                'price' => 18.99,
                'description' => 'A description for Product 10.',
                'filepath' => 'images/sample10.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 11',
                'price' => 27.99,
                'description' => 'A description for Product 11.',
                'filepath' => 'images/sample11.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 12',
                'price' => 23.99,
                'description' => 'A description for Product 12.',
                'filepath' => 'images/sample12.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 13',
                'price' => 36.99,
                'description' => 'A description for Product 13.',
                'filepath' => 'images/sample13.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 14',
                'price' => 46.99,
                'description' => 'A description for Product 14.',
                'filepath' => 'images/sample14.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 15',
                'price' => 28.99,
                'description' => 'A description for Product 15.',
                'filepath' => 'images/sample15.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
