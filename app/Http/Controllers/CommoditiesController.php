<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommoditiesController extends Controller
{

    public function create() {
        return view('commodities.create');
    }

    public function index() {
        return view('commodities.index');
    }

}
