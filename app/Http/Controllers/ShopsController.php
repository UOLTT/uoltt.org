<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\System;
use Illuminate\Http\Request;

class ShopsController extends Controller
{

    public function index() {
        return view('shops.index');
    }

    public function create() {
        return view('shops.create',[
            'Systems' => System::with('locations')->get()
        ]);
    }

    public function store(Request $request) {

        $this->validate($request,[
            'name' => 'required|string',
            'location_id' => 'required|integer',
            'allegiance_id' => 'required|integer',
            'affiliation_id' => 'required|integer'
        ]);

        $Shop = Shop::create([
            'name' => $request->get('name'),
            'location_id' => $request->get('location_id'),
            'allegiance_id' => $request->get('allegiance_id'),
            'affiliation_id' => $request->get('affiliation_id')
        ]);

        return response()->json($Shop);

    }

}
