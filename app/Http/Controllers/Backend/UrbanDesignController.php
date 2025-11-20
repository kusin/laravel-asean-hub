<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UrbanDesign;
use App\Models\Participants;
use Illuminate\Http\Request;

class UrbanDesignController extends Controller
{
    public function index()
    {
        // $data = UrbanDesign::with('participants')->paginate(10);
        $data = UrbanDesign::with('participants')->orderBy('id_urban_design', 'desc')->paginate(75);
        return view('backend.admin.urban_design.index', compact('data'));
    }

    public function create()
    {
        return view('backend.admin.urban_design.create');
    }
}
