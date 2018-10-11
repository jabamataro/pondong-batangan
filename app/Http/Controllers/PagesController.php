<?php

namespace PondongBatangan\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index () {
        $title = 'Pondong Batangan';
        return view('pages.index')->with('title', $title);
    }

    public function about () {
        $title = 'Pondong Batangan';
        return view('pages.about')->with('title', $title);
    }
}
