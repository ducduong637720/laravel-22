<?php

namespace Database\Seeders;

use App\Models\Product;
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
        Product::truncate();
        for($i=1; $i<10; $i++){
            DB::table('products')->insert([
                [
                    'name' => 'Nước hoa',
                    'slug' => 'nuoc-hoa',
                    'content' => 'siêu thơm',
                    'orgin_price' => '500000',
                    'sale_price' => '750000',
                    'category_id' => 1,
                    'brand_id' => 1,
                    'status' => 0,
                    'option' => 'sản phẩm abc gì đó',
                    'sale_count' => 100,
                    'review_count' => '15',
                    // 'info' => 'anh',
                    'user_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
              
            ]);
        }
       
    }
}
