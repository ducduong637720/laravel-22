<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\UserInfo;
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
        User::truncate(); 
        UserInfo::truncate();   
        $users = [
            [
                'user' => [
                    'name' => 'admin',
                    'address' => 'ha noi',
                    'phone' => '0129525665',
                    'avatar' => 'anh duc',
                    'status' => '1',
                    'email' => 'duc1@gmail.com',
                    'password' => bcrypt('123456')
                ],
                'info' => [
                    'address' => 'ha noi',
                    'phone' => '0129525665'
                ]
            ],
            [
                'user' => [
                    'name' => 'admod',
                    'address' => 'lao cai',
                    'phone' => '0129525667',
                    'avatar' => 'anh duc',
                    'status' => '1',
                    'email' => 'duc11@gmail.com',
                    'password' => bcrypt('123456')
                ],
                'info' => [
                    'address' => 'lao cai',
                    'phone' => '0129525667'
                ]
            ]
            
        ];
        foreach($users as $user){
            
            $user_id = DB::table('users')->insertGetId($user['user']);
            $user['info']['user_id'] = $user_id;
            DB::table('user_infos')->insert($user['info']);
        }
        // User::factory()->count(5)->create();
    }
}
