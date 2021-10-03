<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_categories')->insert([
            'name' => 'Printers',
            'description' => 'Find the best and latests printers for your printing needs'
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Cellphones',
            'description' => 'Find the latests cellphones'
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Laptops',
            'description' => 'Find the best and most sophisticated laptops'
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Keyboards',
            'description' => 'Find the best keyboards for your typing needs'
        ]);
    }
}
