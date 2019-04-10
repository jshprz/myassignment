<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachRegisterController extends Controller
{
    protected function index()
    {
        return view('my-assignment.pages.register_coach_page');
    }
}
