<?php

namespace App\Http\Controllers;

use App\Models\Commodity;
use Illuminate\Http\Request;

class CommoditiesController extends Controller
{
    public function create()
    {
        return view('commodities.create');
    }

    public function index()
    {
        return view('commodities.index');
    }

    public function show(Commodity $commodity)
    {
        return view('commodities.show')->with('commodity', $commodity->load('bids.shop'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required|string',
            'description' => 'required|string',
            'mass'        => 'required|integer|min:0',
        ]);

        $Commodity = Commodity::create([
            'name'        => $request->get('name'),
            'description' => $request->get('description'),
            'mass'        => $request->get('mass'),
        ]);

        return response()->json($Commodity);
    }
}
