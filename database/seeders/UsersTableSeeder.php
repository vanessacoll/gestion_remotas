<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'      => 'rmendoza',
            'nombres'   => 'Ruben Mendoza',
            'email'     => 'rmendoza9@gmail.com',
            'password'  => bcrypt('rj30032004'),

        ]);

    }
}
