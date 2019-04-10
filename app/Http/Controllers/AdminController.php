<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myassignment\Repository\BasketballLeagueInterface;

class AdminController extends Controller
{
    public function __construct(BasketballLeagueInterface $basketball)
    {
        $this->basketball = $basketball;
    }

    protected function index()
    {
        return view('my-assignment.pages.admin_page');
    }

    protected function getTeams()
    {
        return $this->basketball->getTeams();
    }
}
