<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RolesSeeder::class,
            UsersSeeder::class,
            BlogSeeder::class,
            MenusSeeder::class,
            GendersSeeder::class,
            ExercisebehaviorsSeeder::class,
            FoodallergiesSeeder::class,
            NcdsSeeder::class,]);
    }
}
