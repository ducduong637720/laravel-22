<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::truncate();
        for ($i = 1; $i <= 40; $i++) {
            $files = Storage::files('product/prods');
            $paths[] = '';
            foreach ($files as $key => $file) {
                $file = str_replace("product/", "", $file);
                $paths[$key] = $file;

            }
            $randomFile = rand(0,10 );
            $path=$paths[$randomFile];
            if( $path==""){
                $path=$paths[2];
            }
            DB::table('images')->insert([
                'name' => $file,
                'disk' => 'product',
                'path' => $path,
                'product_id' => rand(1,9),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
