<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'name' => 'Công trình chung cư Berriver 100m2 2 ngủ Nguyễn Văn Cừ – chị Chung',
                'address' => 'HN',
                'price' => 2,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Thiết kế nội thất chung cư Vinhomes Smart City S1 65m2 2 ngủ – anh Lâm',
                'address' => 'HN',
                'price' => 3,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/temp/-uploaded-2021-01-chi-chung-nguyen-van-cu_1-can-ho-chung-cu-berriver-100m2-2-ngu-nguyen-van-cu_cr_600x450.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 2,
            ],
            [
                'id' => 3,
                'name' => 'home3 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 4,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/temp/-uploaded-2021-01-chi-chung-nguyen-van-cu_mat-bang-noi-that-can-100m2-nguyen-van-cu_cr_600x450.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 3,
            ],
            [
                'id' => 4,
                'name' => 'home4 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 1,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 5,
                'name' => 'home5 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 1.5,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 2,
            ],
            [
                'id' => 6,
                'name' => 'home6 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 2,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 7,
                'name' => 'home7 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 3,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 8,
                'name' => 'home8 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 3,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 9,
                'name' => 'home9 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 6,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 2,
            ],
            [
                'id' => 10,
                'name' => 'home10 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 9,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 3,
            ],
            [
                'id' => 11,
                'name' => 'home11 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 22,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 3,
            ],
            [
                'id' => 12,
                'name' => 'home12 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 54,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 13,
                'name' => 'home13 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 44,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 3,
            ],
            [
                'id' => 14,
                'name' => 'home7 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 14,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 15,
                'name' => 'home15 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 77,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 2,
            ],
            [
                'id' => 16,
                'name' => 'home16 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 88,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 2,
            ],
            [
                'id' => 17,
                'name' => 'home17 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 99,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 3,
            ],
            [
                'id' => 18,
                'name' => 'home18 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 100,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 3,
            ],
            [
                'id' => 19,
                'name' => 'home19 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 44,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 1,
            ],
            [
                'id' => 20,
                'name' => 'home20 SomeWhere in Neverland',
                'address' => 'HN',
                'price' => 22,
                'content' => 'Nhà ở Hà Nội',
                'thumbnail' => 'https://noithattrevietnam.com/uploaded/Kien-thuc-nha-dep/hinh-anh-nha-2-tang-mai-thai/1-hinh-anh-nha-2-tang-mai-thai.jpg',
                'detail' => 'Nhà ở Hà Nội, Văn Miếu',
                'status' => 2,
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
