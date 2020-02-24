<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataInsert =[
            [
              'name'=>'Sân bóng đá Xuân Thịnh',
               'description'=>'Là một sân bóng đá thường tốt, thường xuyên tổ chức các giải đấu',
               'phone'=>'0856982982',
                'unit_price'=>'250000',
                'image'=>'xuanthinh.jpg',
                'category_id'=>'4',
                'supplier_id'=>'1'
            ],

            [
                'name'=>'Sân bóng đá Chuyên Việt',
                'description'=>'Là một sân bóng đá thường tốt, thường xuyên tổ chức các giải đấu',
                'phone'=>'0856982982',
                'unit_price'=>'250000',
                'image'=>'chuyenviet.jpg',
                'category_id'=>'3',
                'supplier_id'=>'2'
            ],

            [
                'name'=>'Sân bóng đá Trang Hoàng',
                'description'=>'Là một sân bóng đá thường tốt, thường xuyên tổ chức các giải đấu',
                'phone'=>'0856982982',
                'unit_price'=>'250000',
                'image'=>'tranghoang.jpg',
                'category_id'=>'2',
                'supplier_id'=>'3'
            ],

            [
                'name'=>'Sân bóng đá Duy Tân',
                'description'=>'Là một sân bóng đá thường tốt, thường xuyên tổ chức các giải đấu',
                'phone'=>'0856982982',
                'unit_price'=>'250000',
                'image'=>'duytan.jpg',
                'category_id'=>'1',
                'supplier_id'=>'4'
            ],
        ];
        DB::table('products')->insert($dataInsert);
    }
}
