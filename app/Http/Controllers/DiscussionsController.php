<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;


use Emojione\Emojione;
use Emojione\Client as EmojioneClient;

class DiscussionsController extends Controller
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


        $allDis = Discussion::orderBy('created_at','desc')->get();

        //converting emoji shortnames into emoji icons
        foreach($allDis as $dis)
        {
            $body = htmlspecialchars($dis->disBody);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $dis->disBody = $body;
        }

        return view('pages.discussions')->with('allDis', $allDis);
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
            'discussionBody' => 'required'
        ]);

        $dis = new Discussion;
        $dis->userName = "Joe";
        $dis->userDp = "uDP6.jpg";
        $dis->bId = 1;

        $disBody = Emojione::toShort($request->discussionBody);

        $dis->disBody = $disBody;
        $dis->disImage = $request->image;
        $dis->disScore = 0;
        $dis->disOpen = true;

        $dis->save();

        return(redirect('/dis')->with('success','Discussion has been added'));
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
