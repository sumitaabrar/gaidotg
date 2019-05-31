<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;


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
        $emojioneClient = new EmojioneClient();
        $emojioneClient->cacheBustParam = '';
        $emojioneClient->imagePathPNG = 'https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/png/';
        Emojione::setClient($emojioneClient);



        //return Post::where('title','Post # 01')->get();
        $allRev = Review::orderBy('created_at','desc')->get();

        //converting emoji shortnames into emoji icons
        foreach($allRev as $rev)
        {
            $body = htmlspecialchars($rev->rBody);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $rev->rBody = $body;
        }

        return view('pages.bProfile')->with('allRev', $allRev);
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

        $revBody = Emojione::toShort($request->review);

        $rev = new Review;
        $rev->userName = "Ali";
        $rev->userDp = "uDP2.jpg";
        $rev->bId = 1;
        $rev->rBody = $revBody;
        $rev->rRate = $request->rate;
        $rev->save();

        return redirect('/bProfile')->with('success', 'Review has been added');
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
