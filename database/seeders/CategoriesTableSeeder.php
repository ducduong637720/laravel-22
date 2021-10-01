<?php

namespace Database\Seeders;

use App\Models\Category;
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
        // DB::table('categories')->truncate();
        Category::truncate();
        // $categories = 
        // [
        //     [
        //         'name' => 'Máy  tính',
        //         'status' => 1,
        //         'created_at' => now(),
        //         'updated_at' => now(),
                
        //     ], 
        //     [
        //         'name' => 'Điện thoại',
        //         'status' => 2,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ], 
        //     [
        //         'name' => 'Phần cứng',
        //         'status' => 3,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]
        // ];
        // foreach($categories as $category){
        //     DB::table('categories')->insert($category);
        // }
        // DB::table('categories')->insert($categories);
        Category::factory()->count(5)->create();
    }
}
