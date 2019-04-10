<?php

use Illuminate\Database\Seeder;
use App\Myassignment\Models\Tournament;

class TournamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tournament::insert([
            'match_type' => 'quarter',
            'team1_id' => 1,
            'team2_id' => 2,
        ]);
        Tournament::insert([
            'match_type' => 'quarter',
            'team1_id' => 3,
            'team2_id' => 4,
        ]);
        Tournament::insert([
            'match_type' => 'quarter',
            'team1_id' => 5,
            'team2_id' => 6,
        ]);
        Tournament::insert([
            'match_type' => 'quarter',
            'team1_id' => 7,
            'team2_id' => 8,
        ]);
    }
}
