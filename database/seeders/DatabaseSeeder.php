<?php

namespace Database\Seeders;

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
        // \App\Models\Course::factory(1)->create(['category'=>'Adulto','name'=>'La Fé de Jesús']);
        // \App\Models\User::factory(1)->create(['email'=>'edu@demo.com']);
        $this->call(UserSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(LessonSeeder::class);
    }
}
