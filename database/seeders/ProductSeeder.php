<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name' => 'Printer',
            'slug' => 'test-printer',
            'description' => 'This is a test printer',
            'price' => 100.50,
            'active' => true,
            'current_quantity' => 100,
            'category_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => 'IPhone',
            'slug' => 'test-iphone',
            'description' => 'This is a test iphone',
            'price' => 1500.05,
            'active' => true,
            'current_quantity' => 100,
            'category_id' => 2,
        ]);
        DB::table('products')->insert([
            'name' => 'Aero 15X',
            'slug' => 'test-laptop',
            'description' => 'This is a test laptop',
            'price' => 2500.50,
            'active' => true,
            'current_quantity' => 100,
            'category_id' => 3,
        ]);
        DB::table('products')->insert([
            'name' => 'Akko Ocean Star',
            'slug' => 'test-keyboard',
            'description' => 'This is a test keyboard',
            'price' => 100.50,
            'active' => true,
            'current_quantity' => 100,
            'category_id' => 4,
        ]);
    }
}
