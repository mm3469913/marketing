<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
           
            ['name' => 'mohammed',
            'description' => 'ar',
            'price' => 100,
            'manage_stock' => false,
            'in_stock' => false,
            'slug' => 'r',
            'sku' => 2,
            'is_active' => false]
        ];
        
        foreach ($products as $product){
            $productCreate = \App\Models\Product::create($product);
        }
    }
}
