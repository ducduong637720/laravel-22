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
        //         'phone' => '0971234567'
        //     ],
        //     [
        //         'name' => 'Duc',
        //         'email' => 'Duc@gmail.com',
        //         'password' =>bcrypt('duc12345'),
        //         'avatar' => 'Ảnh đức',
        //         'phone' => '0971234567'
        //     ]
        // ];
        // foreach($users as $user){
        //     DB::table('users')->insert($user);
        // }
        User::factory()->count(5)->create();
    }
}
