<?php

namespace Database\Seeders;

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Semente'
        ]);
        Category::create([
            'name' => 'Bonsai'
        ]);
       
        Category::create([
            'name' => 'Adubo'
        ]);
        Category::create([
            'name' => 'Flor'
        ]);
       
    }
}
