<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [];
        $count = 100;

        for ($i = 0; $i < $count; $i++) {
            $products[] = [
                'category_id' => rand(1, 10),
                'brand_id' => rand(1, 10),
                'title' => 'Casio MRP-700-1 AVEFKXF - Касио МРП 700',
                'alias' =>  $i . 'casio-mrp-700-1avefff123',
                'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                'price' => rand(100, 500),
                'old_price' => rand(100, 500),
                'status' => '1',
                'keywords' => 'watch',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                'img' => $i . '.png',
                'hit' => rand(0, 1),
            ];
        }


        \DB::table('products')->insert($products);
    }
}
