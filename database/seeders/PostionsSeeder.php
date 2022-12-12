<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'name' => 'Giám đốc',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phó giám đốc',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phó giám đốc thương hiệu',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Trưởng Phòng',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phó phòng',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Trưởng bộ phận',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Trưởng nhóm',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Chuyên viên',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Chuyên viên (Hành chính đơn vị)',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
    ]);
    }
}
