<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataInsert =
            [
                [
                    'name'=>'Quận Hải Châu'
                ],
                [
                    'name'=>'Quận Sơn Trà'
                ],
                [
                    'name'=>'Quận Thanh Khê'
                ],
                [
                    'name'=>'Quận Liên Chiểu'
                ],
                [
                    'name'=>'Quận Cẩm Lệ'
                ],
                [
                    'name'=>'Quận Ngũ Hành Sơn'
                ],
                [
                    'name'=>'Huyện Hòa Vang'
                ]
            ];
        DB::table('categories')->insert($dataInsert);
    }
}
