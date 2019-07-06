<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Discussion;
use App\Recommendation;


use Emojione\Emojione;
use Emojione\Client as EmojioneClient;

class FeedController extends Controller
{
    public function index(){

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

        return view('pages.feed')->with('allDis', $allDis)->with('allRec', $allRec);

        

        //return view('pages.discussions')->with('allRev', $allRev);



    }
}
