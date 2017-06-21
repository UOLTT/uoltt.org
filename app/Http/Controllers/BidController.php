<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{

    public function create() {
        return view('bids.create');
    }

    public function index() {
        return view('bids.index',[
            'Bids' => Bid::with('commodity','shop')->get()
        ]);
    }
}
