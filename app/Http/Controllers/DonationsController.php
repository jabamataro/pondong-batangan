<?php

namespace PondongBatangan\Http\Controllers;

use Illuminate\Http\Request;
use PondongBatangan\Donation;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'headerTitle' => 'Donations',
            'siteTitle' => 'Donations - People of Pondong Batangan',
            'donations' => Donation::orderBy('created_at', 'desc')->paginate(5)
        );
        return view('donations.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'headerTitle' => 'Add a Donation',
            'siteTitle' => 'Add a Donation - People of Pondong Batangan'
        );
        return view('donations.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'donated_by' => 'required',
            'amount' => 'required',
            'message' => 'required'
        ]);

        // Submit News

        $donations = new Donation;
        $donations->donated_by = $request->input('donated_by');
        $donations->amount = $request->input('amount');
        $donations->message = $request->input('message');
        $donations->save();

        return redirect('/donations')->with('success', 'Donation Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = array(
            'headerTitle' => 'Donations',
            'siteTitle' => 'Donations - People of Pondong Batangan',
            'donations' => Donation::find($id)
        );

        return view('donations.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(
            'headerTitle' => 'Edit Donation',
            'siteTitle' => 'Edit Donation - People of Pondong Batangan',
            'donations' => Donation::find($id)
        );

        return view('donations.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'donated_by' => 'required',
            'amount' => 'required',
            'message' => 'required'
        ]);

        // Submit News

        $donations = new Donation;
        $donations->donated_by = $request->input('title');
        $donations->amount = $request->input('amount');
        $donations->message = $request->input('message');
        $donations->save();

        return redirect('/donations')->with('success', 'Donation Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donations = Donation::find($id);
        $donations->delete();

        return redirect('/donations')->with('success', 'Donation Removed');
    }
}
