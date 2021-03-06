<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\User;
use App\Brand;
use App\Rating;

use Emojione\Emojione;
use Emojione\Client as EmojioneClient;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        
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
            'review' => 'required' 
        ]);

        $rev = new Review;
        $rev->user_id = auth()->user()->id;
        $rev->brand_id = $request->brand_id;

        $revBody = Emojione::toShort($request->review);

        $rev->body = $revBody;
        $rev->rate = $request->rate;
        $rev->score = 0;
        
        $rev->save();

        return redirect()->back()->with('success', 'Review has been added');
    }

    public function storeRating(Request $request)
    {
        
        if($request->rating)
            $rating = $request->rating;
        else
            $rating = 0;

        $r = new Rating;

        $r->brand_id = $request->brand_id;
        $r->user_id = auth()->user()->id;
        $r->rating = $rating;

        $r->save();

        return(redirect()->back());

    }

    public function updateRating(Request $request, $id)
    {
        $r = Rating::find($id);
        $r->rating = $request->rating;

        $r->save();

        return(redirect()->back());
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
