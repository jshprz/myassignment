<?php

use Illuminate\Database\Seeder;
use App\Myassignment\Models\Coach;

class CoachTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coach::insert([
              'name' => 'tim cone', 
              'username' => 'tim', 
              'password' => bcrypt('timecone'),
              'status' => 'free agent'
        ]);
    }
}
