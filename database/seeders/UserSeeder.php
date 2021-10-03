<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admins.com',
            'password' => '$2a$12$uIh2zOH9CkQf0UneAkER/uoyheBkBrMvP5TgmkT3yRhaPgW.5t5uS' // password
        ]);
    }
}
