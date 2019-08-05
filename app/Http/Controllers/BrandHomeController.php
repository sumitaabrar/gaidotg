<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Brand;
use App\Assessment;
use App\Outlet;
use App\Review;
use App\Rating;
use App\Announcement;
use Auth;

use Emojione\Emojione;
use Emojione\Client as EmojioneClient;


class BrandHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:brand');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $emojioneClient = new EmojioneClient();
        $emojioneClient->cacheBustParam = '';
        $emojioneClient->imagePathPNG = 'https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/png/';
        Emojione::setClient($emojioneClient);

        $id = auth()->user()->brand_id;

        $assess = Assessment::where('brand_id', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $allOut = Outlet::where('brand_id', $id)->get();
        $allAnn = Announcement::where('brand_id', $id)->get();

        $allRev = Review::where('brand_id', $id)->orderBy('created_at', 'desc')->get();
        //converting emoji shortnames into emoji icons
        foreach($allRev as $rev)
        {
            $body = htmlspecialchars($rev->body);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $rev->body = $body;
        }
             
        $bId = $id;

        return view('pages.brands.home')->with([ 
            'bId'       =>$bId,
            'assess'    => $assess, 
            'allOut'    =>$allOut,
            'allAnn'    =>$allAnn, 
            'allRev'    =>$allRev,
            ]);
    }
}
