<?php

namespace Database\Seeders;

use App\Models\Post;
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
        // DB::table('posts')->truncate();
        Post::truncate();
        // $posts = [
        //     [
        //         'title' => 'Bai viet 3',
        //         'view_count' => '610',
        //         'slug' => 'Bai viet-3',
        //         'content' => 'Content exam',
        //         'status' => 1,
        //         'user_created_id' => 3,
        //         'user_updated_id' => 3,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //         'category_id' =>3
        //     ],
        // ];
        // // foreach($posts as $post){
        // //     DB::table('posts')->insert($post);
        // // }
        // DB::table('posts')->insert($posts);
        Post::factory()->count(5)->create();
    }
}
