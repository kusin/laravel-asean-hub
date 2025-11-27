<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Judges;
use App\Models\Participants;
use App\Models\Voters;
use App\Models\UrbanDesign;

class DashboardController extends Controller
{
    public function showAdmin()
    {
        $number_judges          = Judges::where('status_data', 'Active')->count();
        $number_participants    = Participants::where('status_data', 'Active')->count();
        $number_voters          = Voters::where('status_data', 'Active')->count();
        $number_urban_design    = UrbanDesign::where('status_data', 'Active')->count();
        return view('backend.admin.dashboard', compact(
            'number_judges',
            'number_participants',
            'number_voters',
            'number_urban_design',
        ));
    }

    public function showJudges()
    {
        $number_participants    = Participants::where('status_data', 'Aktif')->count();
        $number_urban_design    = UrbanDesign::where('status_data', 'Aktif')->count();
        return view('backend.judges.dashboard', compact(
            'number_participants',
            'number_urban_design',
        ));
    }

    public function showParticipants()
    {
        return view('backend.participants.dashboard');
    }

    public function showVoters()
    {
        //
    }
}
