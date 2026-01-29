<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Jeera',
                'pack_size' => '24 Units',
                'price' =>'250.00',
                'image_url'=>'images/jeera.png',
            ],
             [
                'name' => 'freshter',
                'pack_size' => '24 Units',
                'price' =>'250.00',
                'image_url'=>'images/freshter.png',
            ],
             [
                'name' => 'Orange',
                'pack_size' => '24 Units',
                'price' =>'250.00',
                'image_url'=>'images/orange.png',
            ],
             [
                'name' => 'Green G',
                'pack_size' => '24 Units',
                'price' =>'250.00',
                'image_url'=>'images/greeng.png',
            ],
             [
                'name' => 'Limun',
                'pack_size' => '24 Units',
                'price' =>'250.00',
                'image_url'=>'images/limun.png',
            ],
             [
                'name' => 'Malty',
                'pack_size' => '24 Units',
                'price' =>'250.00',
                'image_url'=>'images/malty.png',
            ],

        ];
          DB::table('products')->truncate();

        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['name'],
                'pack_size' => $product['pack_size'],
                'price'=>$product['price'],
                'image_url' => $product['image_url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

