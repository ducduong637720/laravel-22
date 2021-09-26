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
                'view_count' => '61',
                'slug' => 'Bai viet-1',
                'content' => 'Content exam',
                'status' => 1,
                'user_created_id' => 1,
                'user_updated_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' =>1
            ],
            [
                'title' => 'Bai viet 2',
                'view_count' => '62',
                'slug' => 'Bai viet-2',
                'content' => 'Content exam',
                'status' => 1,
                'user_created_id' => 2,
                'user_updated_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' =>2
            ],
            [
                'title' => 'Bai viet 3',
                'view_count' => '610',
                'slug' => 'Bai viet-3',
                'content' => 'Content exam',
                'status' => 1,
                'user_created_id' => 3,
                'user_updated_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' =>3
            ],
            [
                'title' => 'Bai viet 4',
                'view_count' => '616',
                'slug' => 'Bai viet-4',
                'content' => 'Content exam',
                'status' => 1,
                'user_created_id' => 4,
                'user_updated_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' =>4
            ],
            [
                'title' => 'Bai viet 5',
                'view_count' => '617',
                'slug' => 'Bai viet-5',
                'content' => 'Content exam',
                'status' => 1,
                'user_created_id' => 5,
                'user_updated_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' =>5
            ],
            [
                'title' => 'Bai viet 6',
                'view_count' => '621',
                'slug' => 'Bai viet-6',
                'content' => 'Content exam',
                'status' => 1,
                'user_created_id' => 6,
                'user_updated_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' =>6
            ],
            [
                'title' => 'Bai viet 7',
                'view_count' => '912',
                'slug' => 'Bai viet-7',
                'content' => 'Content exam',
                'status' => 1,
                'user_created_id' => 7,
                'user_updated_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' =>7
            ],
            [
                'title' => 'Bai viet 8',
                'view_count' => '189',
                'slug' => 'Bai viet-8',
                'content' => 'Content exam',
                'status' => 1,
                'user_created_id' => 8,
                'user_updated_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' =>8
            ],
            [
                'title' => 'Bai viet 9',
                'view_count' => '634',
                'slug' => 'Bai viet-9',
                'content' => 'Content exam',
                'status' => 1,
                'user_created_id' => 9,
                'user_updated_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' => 9,
            ],
              [
                'title' => 'Bai viet 10',
                'view_count' => '345',
                'slug' => 'Bai viet-10',
                'content' => 'Content exam',
                'status' => 1,
                'user_created_id' => 10,
                'user_updated_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
                'category_id' =>10
            ]
        ];
        // foreach($posts as $post){
        //     DB::table('posts')->insert($post);
        // }
        DB::table('posts')->insert($posts);
    }
}
