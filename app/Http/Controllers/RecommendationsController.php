<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recommendation;
use App\User;

use Emojione\Emojione;
use Emojione\Client as EmojioneClient;

class RecommendationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Fetching all recommendations
        $allRec = Recommendation::orderBy('created_at','desc')->get();
        //converting emoji shortnames into emoji icons
        foreach($allRec as $rec)
        {
            $body = htmlspecialchars($rec->body);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $rec->body = $body;
        }

        return view('pages.recommendations')->with([ 
            'allRec'    => $allRec,
            ]);
        
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
        $this->validate($request, [
            'recommendation' => 'required'
        ]);

        $rec = new Recommendation;
        $rec->user_id = auth()->user()->id;

        $recBody = Emojione::toShort($request->recommendation);

        $rec->body = $recBody;
        $rec->image = $request->image;
        $rec->is_open = true;

        $rec->save();

        return(redirect('/rec')->with('success','Recommendation has been added'));
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
