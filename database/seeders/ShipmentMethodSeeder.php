<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\ShipmentMethod;
use Illuminate\Support\Facades\DB;

class ShipmentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('shipment_methods')->insert([
            'name' => 'Ground express',
            'description' => 'Express ground',
            'rate' => 3.20
        ]);
        DB::table('shipment_methods')->insert([
            'name' => 'Next day express',
            'description' => 'Next day shipment',
            'rate' => 10.15
        ]);
        DB::table('shipment_methods')->insert([
            'name' => 'Economy shipment',
            'description' => 'Cheapest option',
            'rate' => 1.25
        ]);
        
    }
}
