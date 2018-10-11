<?php

namespace PondongBatangan\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index () {
        // $data = array(
        //     'headerTitle' => 'People of Pondong Batangan',
        // );
        $headerTitle = 'People of Pondong Batangan';
        return view('pages.index')->with('headerTitle', $headerTitle);
    }

    public function about () {
        $headerTitle = 'About';
        return view('pages.about')->with('headerTitle', $headerTitle);
    }

    public function history () {
        $headerTitle = 'History';
        return view('pages.history')->with('headerTitle', $headerTitle);
    }
}
