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
        $this->call(TeamTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CoachTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(TournamentTableSeeder::class);
    }
}
