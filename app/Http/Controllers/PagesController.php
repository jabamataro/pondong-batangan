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
}
