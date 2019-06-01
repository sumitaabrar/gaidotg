<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;





use Emojione\Emojione;
use Emojione\Client as EmojioneClient;









class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function bProfile(){
        return view('pages.bProfile');
    }
    public function userProfile(){
        return view('pages.userProfile');
    }
    public function signup(){
        return view('pages.signup');
    }


    public function trash(){


        $emojioneClient = new EmojioneClient();
        $emojioneClient->cacheBustParam = '';
        $emojioneClient->imagePathPNG = 'https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/png/';
        Emojione::setClient($emojioneClient);


        $allRev = Review::orderBy('created_at','desc')->get();

        /*foreach($allRev as $rev)
        {   echo $rev->rBody;
        }
        */

        foreach($allRev as $rev)
        {
            
            
            $body = htmlspecialchars($rev->rBody);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);

            $rev->rBody = $body;

    
        }

        return view('pages.trashed-bProfile')->with('allRev', $allRev);
    }

    public function page2(){
        return view('pages.page2');
    }

    



}
