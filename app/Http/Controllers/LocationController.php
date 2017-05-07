<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function create() {
        return view('locations.create');
    }

    public function index() {
        return view('locations.index');
    }

    public function store(Request $request) {

        $this->validate($request,[
            'name' => 'required|string',
            'system_id' => 'required|integer',
            'celestial_type_id' => 'required|integer',
            'allegiance_id' => 'required|integer',
            'affiliation_id' => 'required|integer'
        ]);

        $Location = Location::create([
            'name' => $request->get('name'),
            'system_id' => $request->get('system_id'),
            'user_id' => \Auth::user()->id,
            'celestial_type_id' => $request->get('celestial_type_id'),
            'allegiance_id' => $request->get('allegiance_id'),
            'affiliation_id' => $request->get('affiliation_id')
        ]);

        return response()->json($Location);

    }

}
