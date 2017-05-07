<?php

namespace App\Http\Controllers;

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

}
