<?php

namespace PondongBatangan\Http\Controllers;

use Illuminate\Http\Request;
use PondongBatangan\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'headerTitle' => 'Ulat Batangan',
            'siteTitle' => 'Ulat Batangan - People of Pondong Batangan',
            'news' => News::orderBy('created_at', 'desc')->paginate(5)
        );
        return view('news.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array(
            'headerTitle' => 'Submit your Ulat Batangan',
            'siteTitle' => 'Submit Ulat Batangan - People of Pondong Batangan'
        );
        return view('news.create')->with($data);
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
            'title' => 'required',
            'body' => 'required'
        ]);

        // Submit News

        $news = new News;
        $news->title = $request->input('title');
        $news->body = $request->input('body');
        $news->save();

        return redirect('/news')->with('success', 'News Submitted');
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
            'news' => News::find($id)
        );

        return view('news.show')->with($data);

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
            'headerTitle' => 'Edit your Ulat Batangan',
            'siteTitle' => 'Ulat Batangan - People of Pondong Batangan',
            'news' => News::find($id)
        );

        return view('news.edit')->with($data);
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
            'title' => 'required',
            'body' => 'required'
        ]);

        // Submit News

        $news = News::find($id);
        $news->title = $request->input('title');
        $news->body = $request->input('body');
        $news->save();

        return redirect('/news')->with('success', 'News Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect('/news')->with('success', 'News Removed');
    }
}
