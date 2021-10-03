<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('payment_methods')->insert([
            'name' => 'Cash',
            'description' => 'On arrival cash payment',
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Debit',
            'description' => 'Visa/MasterCard debit',
        ]);
        DB::table('product_categories')->insert([
            'name' => 'Credit',
            'description' => 'Visa/MasterCard debit',
        ]);
    }
}
