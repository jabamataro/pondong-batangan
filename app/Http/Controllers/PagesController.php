<?php

namespace PondongBatangan\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index () {
        $data = array(
            'headerTitle' => 'People of Pondong Batangan',
            'siteTitle' => 'People of Pondong Batangan'
        );
        
        return view('pages.index')->with($data);
    }

    public function about () {
        $data = array(
            'headerTitle' => 'About',
            'siteTitle' => 'About - People of Pondong Batangan'
        );
        return view('pages.about')->with($data);
    }

    public function history () {
        $data = array(
            'headerTitle' => 'History',
            'siteTitle' => 'History - People of Pondong Batangan'
        );
        return view('pages.history')->with($data);
    }

    public function richManPoorMan () {
        $data = array(
            'headerTitle' => 'Rich Man - Poor Man Tension in Society',
            'siteTitle' => 'Rich Man - Poor Man Tension in Society - People of Pondong Batangan'
        );
        return view('pages.teachings.richManPoorMan')->with($data);
    }
}
