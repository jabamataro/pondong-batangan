<?php

namespace PondongBatangan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PondongBatangan\Donation;
use PondongBatangan\Cash;
use PondongBatangan\Bank;
use DB;
use Carbon\Carbon;

class DonationsController extends Controller
{
    /**
     * Display a listing of the prducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array(
            'headerTitle' => 'Donations',
            'siteTitle' => 'Donations - People of Pondong Batangan',
            'cash' => DB::table('donations')
                                ->where('mode', '=', 'Cash')
                                ->orderBy('created_at', 'desc')
                                ->paginate(5),
            'bank' => DB::table('donations')
                                ->where('mode', '=', 'Bank')
                                ->orderBy('created_at', 'desc')
                                ->paginate(5)
                                
        );

        $request->session()->forget('donation');
        return view('donations.index')->with($data);
    }
    /**
     * Show the step 1 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep1(Request $request)
    {
        $data = array(
            'headerTitle' => 'Donations',
            'siteTitle' => 'Donations - People of Pondong Batangan',
            'donations' => $request->session()->get('donation')
        );
        return view('donations.create-step1')->with($data);
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'contact' => 'required|numeric',
        ]);
        if(empty($request->session()->get('donation'))){
            $donation = new Donation();
            $donation->fill($validatedData);
            $request->session()->put('donation', $donation);
        }else{
            $donation = $request->session()->get('donation');
            $donation->fill($validatedData);
            $request->session()->put('donation', $donation);
        }
        return redirect('/donations/create-step2');
    }

    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Request $request)
    {
        $data = array(
            'headerTitle' => 'Donations',
            'siteTitle' => 'Donations - People of Pondong Batangan',
            'donations' => $request->session()->get('donation')
        );
        return view('donations.create-step2')->with($data);
    }
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep2(Request $request)
    {
        $mode = Input::get('modeRadio');
        if($mode == 'Cash') {
            return redirect('/donations/create-step3-cash');
        } else if($mode == 'Bank') {
            return redirect('/donations/create-step3-bank');
        } else {
        }
        
    }

    /**
     * Show the step 3 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3cash(Request $request)
    {
        $data = array(
            'headerTitle' => 'Donations',
            'siteTitle' => 'Donations - People of Pondong Batangan',
            'donations' => $request->session()->get('donation')
        );
        return view('donations.create-step3-cash')->with($data);
    }
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep3cash(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'reference_number' => 'required',
            'mode' => 'required'
        ]);
        if(empty($request->session()->get('donation'))){
            $donation = new Donation();
            $donation->fill($validatedData);
            $request->session()->put('donation', $donation);
        }else{
            $donation = $request->session()->get('donation');
            $donation->fill($validatedData);
            $request->session()->put('donation', $donation);
        }
        return redirect('/donations/create-step4');
        
    }

    /**
     * Show the step 3 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3bank(Request $request)
    {
        $data = array(
            'headerTitle' => 'Donations',
            'siteTitle' => 'Donations - People of Pondong Batangan',
            'donations' => $request->session()->get('donation')
        );
        return view('donations.create-step3-bank')->with($data);
    }
    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep3bank(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'deposited_at' => 'required|date',
            'reference_number' => 'required',
            'mode' => 'required'
        ]);
        
        if(empty($request->session()->get('donation'))){
            $donation = new Donation();
            $donation->fill($validatedData);
            $request->session()->put('donation', $donation);
        }else{
            $donation = $request->session()->get('donation');
            $donation->fill($validatedData);
            $request->session()->put('donation', $donation);
        }
        return redirect('/donations/create-step4');
        
    }

    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep4(Request $request)
    {
        $data = array(
            'headerTitle' => 'Donations',
            'siteTitle' => 'Donations - People of Pondong Batangan',
            'donations' => $request->session()->get('donation'),
        );
        return view('donations.create-step4')->with($data);
    }

    /**
     * Store product
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donation = $request->session()->get('donation');
        $donation->save();
        return redirect('/donations');
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
            'headerTitle' => 'Ulat Batangan',
            'siteTitle' => 'Ulat Batangan - People of Pondong Batangan',
            'donations' => Donation::find($id)
        );

        return view('donations.show')->with($data);

    }

}
