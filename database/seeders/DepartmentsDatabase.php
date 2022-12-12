<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsDatabase extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'name' => 'Ban lãnh đạo giám đốc',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng thiết kế xe Tải cơ sở & xe Tải CD',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng thiết kế Kiểu dáng',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng thiết kế Khung gầm',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng thiết kế xe Royal',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng thiết kế Điện - Điện tử',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng quản lý dự án CKD',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng Kế hoạch',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng thiết kế xe Bus & Bus CD',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng thiết kế Nội, Ngoại thất',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng Thử nghiệm',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng phân tích Mô phỏng',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng Quản trị dữ liệu',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Xưởng mẫu',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng Quản lý chất lượng',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng Kỹ thuật sản xuất mẫu',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng Tài chính - Kế toán',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng thiết kế xe Du lịch',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Kho vật tư',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng hành chính',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng thiết kế thùng Tải',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng thiết kế Động lực học',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Kiểm thử phần mềm',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'BLĐ phó giám đốc thiết kế xe Bus',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'BLĐ phó giám đốc thiết kế xe Tải chuyên dụng',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng kế hoạch dự án sản phẩm',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng sản phẩm xe du lịch & xe Kia',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng sản phẩm xe Peugoet',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng sản phẩm Royal',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng sản phẩm xe Tải',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng sản phẩm xe Bus & Mini Bus',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng thiết kế Hệ thống thủy lực',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng sản phẩm xe Mazda',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng Nội địa hóa',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'name' => 'Phòng sản phẩm BMW',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],


    ]);

    }
}
