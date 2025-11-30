<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UrbanDesign;
use App\Models\Participants;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;

class UrbanDesignController extends Controller
{
    public function index()
    {
        // $data = UrbanDesign::with('participants')->paginate(10);
        $data = UrbanDesign::with('participants')->orderBy('id_urban_design', 'desc')->paginate(75);
        return view('backend.admin.urban_design.index', compact('data'));
    }

    public function show()
    {
        $data = "
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores quod ex tempore, inventore fugiat nostrum at distinctio expedita. Ut, facilis. Porro magni harum fugiat debitis quibusdam deserunt voluptas possimus laboriosam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores quod ex tempore, inventore fugiat nostrum at distinctio expedita. Ut, facilis. Porro magni harum fugiat debitis quibusdam deserunt voluptas possimus laboriosam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores quod ex tempore, inventore fugiat nostrum at distinctio expedita. Ut, facilis. Porro magni harum fugiat debitis quibusdam deserunt voluptas possimus laboriosam.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores quod ex tempore, inventore fugiat nostrum at distinctio expedita. Ut, facilis. Porro magni harum fugiat debitis quibusdam deserunt voluptas possimus laboriosam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores quod ex tempore, inventore fugiat nostrum at distinctio expedita. Ut, facilis. Porro magni harum fugiat debitis quibusdam deserunt voluptas possimus laboriosam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores quod ex tempore, inventore fugiat nostrum at distinctio expedita. Ut, facilis. Porro magni harum fugiat debitis quibusdam deserunt voluptas possimus laboriosam.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores quod ex tempore, inventore fugiat nostrum at distinctio expedita. Ut, facilis. Porro magni harum fugiat debitis quibusdam deserunt voluptas possimus laboriosam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores quod ex tempore, inventore fugiat nostrum at distinctio expedita. Ut, facilis. Porro magni harum fugiat debitis quibusdam deserunt voluptas possimus laboriosam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores quod ex tempore, inventore fugiat nostrum at distinctio expedita. Ut, facilis. Porro magni harum fugiat debitis quibusdam deserunt voluptas possimus laboriosam.";
        return view('backend.admin.urban_design.show', compact('data'));
    }
}
