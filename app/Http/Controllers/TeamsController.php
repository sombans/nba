<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Team;

class TeamsController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('nba.index', compact(['teams']));
    }
    public function show($id)
    {
        $team = Team::with('players','comments')->find($id);
        return view('nba.show', compact(['team']));
    }
}