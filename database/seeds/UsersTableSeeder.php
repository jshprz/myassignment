<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::insert([
                'name' => 'Joshua Perez', 
                'number' => 27, 
                'position' => 'Shooting Guard', 
                'username' => 'josh', 
                'password' => bcrypt('joshuaperez'),
                'status' => 'free agent'
            ]);
    }
}
