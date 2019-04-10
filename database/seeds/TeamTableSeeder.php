<?php

use Illuminate\Database\Seeder;
use App\Myassignment\Models\Team;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = array('Lakers','Celtics','Bucks','Warriors','Hornets','Blazers','Jazz','Bulls');
        for($i = 0; $i < count($team); $i++)
        {
            Team::insert([
              'team_name' => $team[$i],
              'status' => 'quarter',
              'created_at' => now()
            ]);
        }
    }
}
