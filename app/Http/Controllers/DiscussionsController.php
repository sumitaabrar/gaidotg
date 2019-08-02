<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\User;

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


        //Fetching all discussions
        $allDis = Discussion::orderBy('created_at','desc')->get();
        //converting emoji shortnames into emoji icons
        foreach($allDis as $dis)
        {
            $body = htmlspecialchars($dis->body);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $dis->body = $body;
        }
        //Fetching all DiscussionComments
        $comments = Discussion::with('dcomments')->get();
        //Fetching all DiscussionUsefuls
        $usefuls = Discussion::with('dusefuls')->get();
        
        return view('pages.discussions')->with([
            'allDis'    => $allDis, 
            'comments'  => $comments,
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
