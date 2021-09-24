<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        $posts = [
            [
                'title' => 'Bai viet 1',
                'slug' => 'Bai viet-1',
                'content' => 'Content exam',
                'user_created_id' => 1,
                'user_updated_id' => 1,
                'category_id' =>1
            ],
            [
                'title' => 'Bai viet 2',
                'slug' => 'Bai viet-2',
                'content' => 'Content exam',
                'user_created_id' => 2,
                'user_updated_id' => 2,
                'category_id' =>2
            ],
            [
                'title' => 'Bai viet 3',
                'slug' => 'Bai viet-3',
                'content' => 'Content exam',
                'user_created_id' => 3,
                'user_updated_id' => 3,
                'category_id' =>3
            ],
            [
                'title' => 'Bai viet 4',
                'slug' => 'Bai viet-4',
                'content' => 'Content exam',
                'user_created_id' => 4,
                'user_updated_id' => 4,
                'category_id' =>4
            ],
            [
                'title' => 'Bai viet 5',
                'slug' => 'Bai viet-5',
                'content' => 'Content exam',
                'user_created_id' => 5,
                'user_updated_id' => 5,
                'category_id' =>5
            ],
            [
                'title' => 'Bai viet 6',
                'slug' => 'Bai viet-6',
                'content' => 'Content exam',
                'user_created_id' => 6,
                'user_updated_id' => 6,
                'category_id' =>6
            ],
            [
                'title' => 'Bai viet 7',
                'slug' => 'Bai viet-7',
                'content' => 'Content exam',
                'user_created_id' => 7,
                'user_updated_id' => 7,
                'category_id' =>7
            ],
            [
                'title' => 'Bai viet 8',
                'slug' => 'Bai viet-8',
                'content' => 'Content exam',
                'user_created_id' => 8,
                'user_updated_id' => 8,
                'category_id' =>8
            ],
            [
                'title' => 'Bai viet 9',
                'slug' => 'Bai viet-9',
                'content' => 'Content exam',
                'user_created_id' => 9,
                'user_updated_id' => 9,
                'category_id' =>9
            ],
              [
                'title' => 'Bai viet 10',
                'slug' => 'Bai viet-10',
                'content' => 'Content exam',
                'user_created_id' => 10,
                'user_updated_id' => 10,
                'category_id' =>10
            ]
        ];
        foreach($posts as $post){
            DB::table('posts')->insert($post);
        }
    }
}
