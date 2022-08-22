<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'mujahid',
            'email' => 'mujahid@gmail.com',
            'password'=> bcrypt('password'),
            'username'=> 'mujahid'
        ]);

        User::create([
            'name'=> 'rabbani',
            'email' => 'h@gmail.com',
            'password'=> bcrypt('password'),
            'username'=> 'rabbani'
        ]);

        User::create([
            'name'=> 'sholahudin',
            'email' => 'sholahudin@gmail.com',
            'password'=> bcrypt('password'),
            'username'=> 'sholahudin'
        ]);
    }
}
