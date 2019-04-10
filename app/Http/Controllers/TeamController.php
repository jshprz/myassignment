<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    protected function index()
    {
        return view('my-assignment.pages.team_page');
    }
}
