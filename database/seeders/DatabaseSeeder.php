<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //
         $data = [
            [
                'id' => '1',
                'name'=>'admin',
                'MSNV' => '9999',
                'email' => 'admin@thaco.com.vn',
                'password' => bcrypt('12345'),
            ],

        ];
        DB::table('users')->insert($data);
    }
}
