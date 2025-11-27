<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Judges;
use Illuminate\Http\Request;

class JudgesController extends Controller
{
    public function index()
    {
        $data = Judges::all();
        return view('backend.admin.judges.index', compact('data'));
    }

    public function show()
    {
        return view('backend.admin.judges.show');
    }

    public function create()
    {
        return view('backend.admin.judges.create');
    }

    public function edit()
    {
        return view('backend.admin.judges.edit');
    }
}
