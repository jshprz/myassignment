<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myassignment\Repository\BasketballLeagueInterface;

class PlayerController extends Controller
{

    public function __construct(BasketballLeagueInterface $basketball)
    {
        $this->basketball = $basketball;
    }

    protected function index()
    {
        return view('my-assignment.pages.player_page');
    }

    protected function getPlayersData(Request $request)
    {
        return $this->basketball->getPlayersData($request);
    }

    protected function addPlayerToTeam(Request $request)
    {
        return $this->basketball->addPlayerToTeam($request);
    }

    protected function removePlayerToTeam(Request $request)
    {
        return $this->basketball->removePlayerToTeam($request);
    }
}
