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
                'filepath' => 'images/picture1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular Fit Printed T-shirt',
                'price' => 29.99,
                'description' => 'T-shirt in lightweight cotton jersey with a print motif, round, rib-trimmed neckline and a straight-cut hem. Regular fit for comfortable wear and a classic silhouette.',
                'filepath' => 'images/picture2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Long Regular Fit T-shirt',
                'price' => 24.99,
                'description' => 'Long T-shirt with a round, rib-trimmed neckline and a curved hem. Regular fit for comfortable wear and a classic silhouette.',
                'filepath' => 'images/picture3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Oversized Fit T-shirt',
                'price' => 39.99,
                'description' => 'T-shirt in heavyweight cotton jersey with a print motif. Rib-trimmed neckline, dropped shoulders and a straight-cut hem. Oversized fit for a baggy, extra-loose silhouette.',
                'filepath' => 'images/picture4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular Fit Piqué polo shirt',
                'price' => 49.99,
                'description' => 'Polo shirt in cotton piqué with a ribbed collar, button placket and short sleeves with ribbed trims. Regular fit for comfortable wear and a classic silhouette.',
                'filepath' => 'images/picture5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Loose Fit Vintage-look printed T-shirt',
                'price' => 59.99,
                'description' => 'T-shirt in midweight, printed cotton jersey with a vintage look and soft handfeel. Round, rib-trimmed neckline, dropped shoulders and a straight-cut hem. Loose fit for a generous but not oversized silhouette.',
                'filepath' => 'images/picture6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Slim Fit Ribbed T-shirt',
                'price' => 15.99,
                'description' => 'T-shirt in ribbed, midweight jersey with narrow ribbing around the neckline and a straight-cut hem. Slim fit that hugs the contours of your body, creating a fitted silhouette.',
                'filepath' => 'images/picture7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 8',
                'price' => 32.99,
                'description' => 'A description for Product 8.',
                'filepath' => 'images/picture8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 9',
                'price' => 42.99,
                'description' => 'A description for Product 9.',
                'filepath' => 'images/picture9.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sample Product 10',
                'price' => 18.99,
                'description' => 'A description for Product 10.',
                'filepath' => 'images/picture10.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
