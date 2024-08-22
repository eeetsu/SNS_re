<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id'=>'1',
                'post'=>'おはよう！',
            ],
            [
                'user_id'=>'2',
                'post'=>'こんにちは！',
            ],
            [
                'user_id'=>'3',
                'post'=>'ごきげんよう！',
            ],
            [
                'user_id'=>'4',
                'post'=>'こんばんは！',
            ],
            [
                'user_id'=>'5',
                'post'=>'元気っす！',
            ],
        ]);
    }
}
