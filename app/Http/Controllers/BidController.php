<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Location;
use App\Models\System;
use Illuminate\Http\Request;

class BidController extends Controller
{

    public function create() {
        return view('bids.create',[
            'Locations' => Location::with('shops')->get(),
            'Systems' => System::with('locations')->get()
        ]);
    }

    public function index() {
        return view('bids.index',[
            'Bids' => Bid::with('commodity','shop')
                ->orderBy('updated_at', 'desc')
                ->get()
        ]);
    }

    public function store(Request $request) {

        $this->validate($request,[
            'commodity_id' => 'required|integer',
            'shop_id' => 'required|integer',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ]);

        $Bid = Bid::create([
            'commodity_id' => $request->get('commodity_id'),
            'shop_id' => $request->get('shop_id'),
            'reported_by' => \Auth::user()->id,
            'price' => $request->get('price'),
            'quantity' => $request->get('quantity')
        ]);

        return response()->json($Bid);

    }
}
