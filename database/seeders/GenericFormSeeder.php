<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenericFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('generic_forms')->insert([
            'name' => 'product',
            'json_structure' => '',
        ]);

        DB::table('generic_forms')->insert([
            'name' => 'paymentmethod',
            'json_structure' => '[{"name":"name","type":"text","modelData":"model.name"},{"name":"description","type":"text","modelData":"model.description"}]',
        ]);

        DB::table('generic_forms')->insert([
            'name' => 'shipmentmethod',
            'json_structure' => '',
        ]);

        DB::table('generic_forms')->insert([
            'name' => 'productcategory',
            'json_structure' => '[{"name":"name","type":"text","modelData":"model.name"},{"name":"description","type":"text","modelData":"model.description"}]'
        ]);
    }
}
