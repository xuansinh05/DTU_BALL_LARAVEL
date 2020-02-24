<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data for table  users
        $dataInsert = [
            [
                'name'=>'Nguyễn Xuân Sinh',
                'email'=>'nguyenxuansinh0507@gmail.com',
                'password'=>bcrypt('123456'),
                'phone'=>'0327337125',
                'gender'=>'Nam',
                'address'=>'Quảng Bình',
                'role_id'=>'1'
            ],

            [
                'name'=>'Mai Thu Thảo',
                'email'=>'maithuthao@gmail.com',
                'password'=>bcrypt('123456'),
                'phone'=>'0877966332',
                'gender'=>'Nữ',
                'address'=>'Quảng Nam',
                'role_id'=>'2'
            ],

            [
                'name'=>'Trần Phương Duy',
                'email'=>'phuongduy@gmail.com',
                'password'=>bcrypt('123456'),
                'phone'=>'08712312332',
                'gender'=>'Nam',
                'address'=>'Quảng Trị',
                'role_id'=>'3'
            ],
        ];

        DB::table('users')->insert($dataInsert);
    }
}
