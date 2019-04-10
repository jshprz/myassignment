<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myassignment\Repository\BasketballLeagueInterface;

class CoachController extends Controller
{
    public function __construct(BasketballLeagueInterface $basketball)
    {
        $this->basketball = $basketball;
    }

    protected function index()
    {
        return view('my-assignment.pages.coach_page');
    }

    protected function getCoachData(Request $request)
    {
        return $this->basketball->getCoachData($request);
    }
}
