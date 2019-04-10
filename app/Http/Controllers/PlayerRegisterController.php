<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myassignment\Repository\BasketballLeagueInterface;

class PlayerRegisterController extends Controller
{
    public function __construct(BasketballLeagueInterface $basketball)
    {
        $this->basketball = $basketball;
    }

    protected function index()
    {
        return view('my-assignment.pages.register_player_page');
    }

    protected function createPlayer(Request $request)
    {
        return $this->basketball->createPlayer($request);
    }
}
