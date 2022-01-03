<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Hie Tabaco',
            'description' =>'Tabaco',
            'category_id' => 3,
            'price'=> '21.00'
        ]);
        Product::create([
            'name' => 'Cigarro',
            'description' =>'Malboro vermelho',
            'category_id' => 2,
            'price'=> '10.00'
        ]);
        Product::create([
            'name' => 'teste',
            'description' =>'teste',
            'category_id' => 2,
            'price'=> '12.00'
        ]);
        
    }
}
