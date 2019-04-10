<?php
namespace App\Myassignment\Repository\Eloquent;

use App\Myassignment\Repository\BasketballLeagueInterface;
use App\Myassignment\Models\Admin;
use App\Myassignment\Models\Coach;
use App\Myassignment\Models\Team;
use App\Myassignment\Models\Tournament;
use App\User;
use Validator;

class BasketballLeague implements BasketballLeagueInterface {

  public function __construct(User $player, Coach $coach, Team $team, Tournament $tournament)
  {
      $this->player = $player;
      $this->coach = $coach;
      $this->team = $team;
      $this->tournament = $tournament;
  }

  public function getCoachData($request)
  {
      return response()->json($this->team->with('coach')->with('user')->where('id',$request->coach_id)->first());
  }

  public function getPlayersData($request)
  {
      return response()->json($this->player->where('position',$request->filter_position)->where('status','free agent')->get());
  }

  public function createPlayer($request)
  {
      
      $validatedData = Validator::make($request->all(), [
          'fullname' => 'required',
          'number' => 'required',
          'position' => 'required',
          'username' => 'required|unique:users',
          'password' => 'required'
        ]);
      $validatedData->validate();
      if ($validatedData->passes()) {
          $this->player->name = $request->fullname;
          $this->player->number = $request->number;
          $this->player->position = $request->position;
          $this->player->username = $request->username;
          $this->player->password = $request->password;
          $this->player->status = 'free agent';
          $this->player->save();
          
          return response()->json(true);
      }
      else
      {
          return response()->json($validatedData->errors());
      }
  }

  public function addPlayerToTeam($request)
  {
      $this->player->where('id',$request->player_id)->update([
          'team_id' => $request->team_id,
          'status' => 'contract'
      ]);
      return response()->json(true);
  }

  public function removePlayerToTeam($request)
  {
      $this->player->where('id', $request->player_id)->update([
          'team_id' => null,
          'status' => 'free agent'
      ]);
      return response()->json(true);
  }

  public function getTeams()
  {
      $quarter = $this->team->where('status','quarter')->get();
      $semis = $this->team->where('status','semis')->get();
      $finals = $this->team->where('status','finals')->get();

      return response()->json([
          'quarter' => $quarter,
          'semis' => $semis,
          'finals' => $finals
      ]);
  }

}