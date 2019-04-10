<?php
namespace App\Myassignment\Repository;

interface BasketballLeagueInterface {

  public function getCoachData($request);

  public function getPlayersData($request);

  public function createPlayer($request);

  public function addPlayerToTeam($request);
  
  public function removePlayerToTeam($request);

  public function getTeams();

}