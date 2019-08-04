<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\Brand;


class AnnouncementsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:brand');
    }
    
    
    public function index()
    {
        return view('pages.brands.ann');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'discussion' => 'required'
        ]);

        $dis = new Discussion;
        $dis->user_id = auth()->user()->id;


        $disBody = Emojione::toShort($request->discussion);

        $dis->body = $disBody;
        $dis->image = $request->image;
        $dis->score = 0;
        $dis->is_open = true;

        $dis->save();

        return(redirect('/dis')->with('success','Discussion has been added')); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
