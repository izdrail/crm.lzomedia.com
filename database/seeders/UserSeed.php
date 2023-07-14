<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create a single user
        \App\Models\User::factory()->create([
            'name' => 'Stefan',
            'email' => 'stefan@lzomedia.com',
            'password' => bcrypt('password'),
        ]);
    }
}
