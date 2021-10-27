<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1)->create(['email'=>'edu@demo.com']);

        $data = [
            [
                'name' => 'Edu',
                'email' => 'edu@demo.com',
                'password' => Hash::make('edu'),
            ],
            [
                'name' => 'Uziel C.',
                'email' => 'uziel@demo.com',
                'password' => Hash::make('12345678'),
            ],
        ];

        foreach($data as $datos){
            $user = User::factory()->create($datos);

            Team::factory()->create([
                'name' => "Personal Team's ".$user->name,
                'user_id' => $user->id,
                'personal_team' => 1
            ]);
        }

    }
}
