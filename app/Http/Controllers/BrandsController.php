<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Brand;
use App\Assessment;
use App\Outlet;
use App\Review;

use Emojione\Emojione;
use Emojione\Client as EmojioneClient;

class BrandsController extends Controller
{
    public function index()
    {


    }

    public function show($id)
    {
        $emojioneClient = new EmojioneClient();
        $emojioneClient->cacheBustParam = '';
        $emojioneClient->imagePathPNG = 'https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/png/';
        Emojione::setClient($emojioneClient);


        $bId = $id;
        $brand = Brand::find($id);
        $assess = Assessment::where('brand_id', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $allOut = Outlet::where('brand_id', $id)->get();
        $allRev = Review::where('brand_id', $id)->orderBy('created_at', 'desc')->get();

        //converting emoji shortnames into emoji icons
        foreach($allRev as $rev)
        {
            $body = htmlspecialchars($rev->body);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $rev->body = $body;
        }

        

        return view('pages.bProfile')->with([ 
            'bId'=>$bId, 
            'brand'=>$brand, 
            'assess' => $assess, 
            'allOut'=>$allOut, 
            'allRev'=>$allRev 
            ]);
    }

    public function addReview(Request $request)
    {
        return "OK";
    }
}
