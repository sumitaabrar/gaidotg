<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Discussion;
use App\Recommendation;
use Auth;


use Emojione\Emojione;
use Emojione\Client as EmojioneClient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();


        $emojioneClient = new EmojioneClient();
        $emojioneClient->cacheBustParam = '';
        $emojioneClient->imagePathPNG = 'https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/png/';
        Emojione::setClient($emojioneClient);


        //Fetching all discussions
        $allDis = Discussion::where('user_id', Auth::user()->id)->get();
        //converting emoji shortnames into emoji icons
        foreach($allDis as $dis)
        {
            $body = htmlspecialchars($dis->body);
            $body = Emojione::shortnameToImage($body); 
            $body = nl2br($body);
            $dis->body = $body;
        }

        //Fetching all recommendations
        $allRec = Recommendation::where('user_id', Auth::user()->id)->get();
        //converting emoji shortnames into emoji icons
        foreach($allRec as $rec)
        {
            $body = htmlspecialchars($rec->body);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $rec->body = $body;
        }

        return view('pages.home')->with(['user' => $user])->with('allDis', $allDis)->with('allRec', $allRec);

        //The user's profile is the Home. 
    }
}
