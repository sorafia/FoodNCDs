<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Luffy',
                'username' => 'Luffy',
                'email' => 'Luffy@example.com',
                'password' => bcrypt('12345678'),
                'role_id' => '1',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Zoro',
                'username' => 'Zoro',
                'email' => 'Zoro@example.com',
                'password' => bcrypt('12345678'),
                'role_id' => '1',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Sanji',
                'username' => 'Sanji',
                'email' => 'Sanji@example.com',
                'password' => bcrypt('12345678'),
                'role_id' => '2',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Nami',
                'username' => 'Nami',
                'email' => 'Nami@example.com',
                'password' => bcrypt('12345678'),
                'role_id' => '2',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
        ]);
    }
}
