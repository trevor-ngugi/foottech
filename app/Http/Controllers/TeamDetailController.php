<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\TeamDetail;

class TeamDetailController extends Controller
{
    //
    public function getTeamDetail($team_id)
    {
        // Passing user id into find()
        return TeamDetail::find($team_id)->playerName;
    }

    public function getTeam($team_details)
    {
        // Passing phone id into find()
        return Team::find($team_details)->team_name;
    }
}
