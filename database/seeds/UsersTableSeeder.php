<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'id'=>'1',
            'username'=>'SNS一郎',
            'mail'=>'SNS_1@gmail.com',
            'password'=>bcrypt('SNS12345'),
            'bio'=>'会社員をしています！',
            'images'=>'icon1.png'
            ],
            [
            'id'=>'2',
            'username'=>'SNS二郎',
            'mail'=>'SNS_2@gmail.com',
            'password'=>bcrypt('SNS23456'),
            'bio'=>'子育て中のママです！',
            'images'=>'icon2.png'
            ],
            [
            'id'=>'3',
            'username'=>'SNS三郎',
            'mail'=>'SNS_3@gmail.com',
            'password'=>bcrypt('SNS34567'),
            'bio'=>'学生をしています！',
            'images'=>'icon3.png'
            ],
            [
            'id'=>'4',
            'username'=>'SNS四郎',
            'mail'=>'SNS_4@gmail.com',
            'password'=>bcrypt('SNS45678'),
            'bio'=>'フットサルをしています！',
            'images'=>'icon4.png'
            ],
            [
            'id'=>'5',
            'username'=>'SNS五郎',
            'mail'=>'SNS_5@gmail.com',
            'password'=>bcrypt('SNS56789'),
            'bio'=>'釣りが趣味です！',
            'images'=>'icon5.png'
            ],
        ]);
    }
}
