<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataInsert = [
            [
                'name'=>'Xuân Thịnh',
                'email'=>'xuanthinh@gmail.com',
                'phone'=>'13131231',
                'address'=>'141 Âu Cơ'
            ],
            [
                'name'=>'Chuyên Việt',
                'email'=>'chuyenviet@gmail.com',
                'phone'=>'0789562256',
                'address'=>'141 Âu Cơ'
            ],
            [
                'name'=>'Trang Hoàng',
                'email'=>'tranghoang@gmail.com',
                'phone'=>'13131231',
                'address'=>'121 Duy Tân'
            ],
            [
                'name'=>'Duy Tân',
                'email'=>'duytan@gmail.com',
                'phone'=>'1313141414',
                'address'=>'456 Nguyễn Hữu Thọ'
            ],
        ];
        DB::table('suppliers')->insert($dataInsert);
    }
}
