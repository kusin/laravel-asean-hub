<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Voters;
use Illuminate\Http\Request;

class VotersController extends Controller
{
    public function index()
    {
        // $data = Voters::all();
        // $data = Voters::take(100)->get();
        $data = Voters::orderBy('id_voters', 'desc')->take(100)->get();

        return view('backend.admin.voters.index', compact('data'));
    }
}
