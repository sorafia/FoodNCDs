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
            ['name' => 'Anis',
                'username' => 'anis',
                'email' => 'kullarat@mail.com',
                'password' => bcrypt('12345678'),
                'role_id' => '1',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Noon',
                'username' => 'noon',
                'email' => 'sarita@mail.com',
                'password' => bcrypt('12345678'),
                'role_id' => '1',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['name' => 'Sofia',
                'username' => 'sorafia',
                'email' => 'siafosofia@hotmail.com',
                'password' => bcrypt('11111111'),
                'role_id' => '1',
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
