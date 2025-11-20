<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Participants;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    public function index()
    {
        $data = Participants::all();
        return view('backend.admin.participants.index', compact('data'));
    }
    public function updateProfile()
    {
        return view('backend.participants.profile.update_profile');
    }

    public function showUrbanDesign()
    {
        return view('backend.participants.urban_design.index');
    }

    public function createUrbanDesign()
    {
        return view('backend.participants.urban_design.create');
    }

    public function showAssessment()
    {
        return view('backend.participants.assessment.index');
    }
}
