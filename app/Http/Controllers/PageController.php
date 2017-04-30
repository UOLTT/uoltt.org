<?php

namespace App\Http\Controllers;

class PageController extends Controller
{

    public function faq() {
        return view('faq');
    }

    public function welcome() {
        return view('welcome');
    }

}
