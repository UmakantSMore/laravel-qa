<?php

namespace Database\Seeders;

//use App\Models\User;
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
        \App\Models\User::factory(3)->create()->each(function ($u){ 
            $u -> questions()
                ->saveMany(
                    \App\Models\Question::factory(rand(1,5))->make()
                    //factory(\App\Models\Question::class,rand(1,5))->make()
                );

        });
        

    }
}
