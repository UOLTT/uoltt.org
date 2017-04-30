<?php

namespace App\Http\Controllers;

class PageController extends Controller
{

    public function faq() {
        return view('faq');
    }

    public function index() {
        return view('index');
    }

}
