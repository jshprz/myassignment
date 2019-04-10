<?php

use Illuminate\Database\Seeder;
use App\Myassignment\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::insert([
              'name' => 'zeno sama', 
              'username' => 'zeno', 
              'password' => bcrypt('zenosama')
        ]);
    }
}
