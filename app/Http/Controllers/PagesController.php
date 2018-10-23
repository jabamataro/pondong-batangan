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

    public function programs () {
        $data = array(
            'headerTitle' => 'Programs',
            'siteTitle' => 'Programs - People of Pondong Batangan'
        );
        return view('pages.programs')->with($data);
    }

    // Teachings

    public function richManPoorMan () {
        $data = array(
            'headerTitle' => 'Rich Man - Poor Man Tension in Society',
            'siteTitle' => 'Rich Man - Poor Man Tension in Society - People of Pondong Batangan'
        );
        return view('pages.teachings.richManPoorMan')->with($data);
    }

    public function meagerDesire () {
        $data = array(
            'headerTitle' => 'The Meager Desire of the Poor',
            'siteTitle' => 'The Meager Desire of the Poor - People of Pondong Batangan'
        );
        return view('pages.teachings.meagerDesire')->with($data);
    }

    public function neverDespise () {
        $data = array(
            'headerTitle' => 'Never Despise the Least',
            'siteTitle' => 'Never Despise the Least - People of Pondong Batangan'
        );
        return view('pages.teachings.neverDespise')->with($data);
    }

    public function smallContributions () {
        $data = array(
            'headerTitle' => 'Funds from Small Contributions',
            'siteTitle' => 'Funds from Small Contributions - People of Pondong Batangan'
        );
        return view('pages.teachings.smallContributions')->with($data);
    }

    public function sacrament () {
        $data = array(
            'headerTitle' => 'The Sacrament of the Small',
            'siteTitle' => 'The Sacrament of the Small - People of Pondong Batangan'
        );
        return view('pages.teachings.sacrament')->with($data);
    }

    public function christianCharity () {
        $data = array(
            'headerTitle' => 'Christian Charity of the Batangueño',
            'siteTitle' => 'Christian Charity of the Batangueño - People of Pondong Batangan'
        );
        return view('pages.teachings.christianCharity')->with($data);
    }

    public function loveLife () {
        $data = array(
            'headerTitle' => 'a Way to Love, a Way of Life',
            'siteTitle' => 'a Way to Love, a Way of Life - People of Pondong Batangan'
        );
        return view('pages.teachings.loveLife')->with($data);
    }
}
