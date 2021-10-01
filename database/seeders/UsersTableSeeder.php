<?php

namespace Database\Seeders;

use App\Models\User;
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
         DB::table('users')->truncate();
        // $users = [
        //     [
        //         'name' => 'Admin',
        //         'email' => 'Admin@gmail.com',
        //         'password' => bcrypt('12345678'),
        //         'avatar' => 'Ảnh đức',
        //         'status' => 1,
        //         'phone' => '0971234567',
        //         'address' => 'Hà Nội',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Duc',
        //         'email' => 'Duc@gmail.com',
        //         'password' =>bcrypt('duc12345'),
        //         'avatar' => 'Ảnh đức',
        //         'status' => 1,
        //         'phone' => '0971234567',
        //         'address' => 'Hà Nội',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        // ];
        // // foreach($users as $user){
        // //     DB::table('users')->insert($user);
        // // }
        // DB::table('users')->insert($users);
        User::factory()->count(5)->create();

        //Hàm tìm id
        // $id = DB::table('users')->insertGetId(
        //     [
        //         'name' => 'Admin',
        //         'email' => 'Admin@gmail.com',
        //         'password' => bcrypt('12345678'),
        //         'avatar' => 'Ảnh đức',
        //         'phone' => '0971234567'
        //     ]
        // );
        // dd($id);
    }
}
