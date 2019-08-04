<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Review;
use App\Testimonial; 

use Emojione\Emojione;
use Emojione\Client as EmojioneClient;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:brand', 'guest:admin', 'guest:web']);
    }

    public function index()
    {
        $allRev = Review::orderBy('created_at', 'desc')->take(7)->get();

        //converting emoji shortnames into emoji icons
        foreach($allRev as $rev)
        {
            $body = Str::limit($rev->body, 30);
            $body = htmlspecialchars($body);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $rev->body = $body;
        }

        $allTest = Testimonial::orderBy('created_at', 'desc')->take(3)->get();


        return view('pages.index')->with([
            'allRev'    => $allRev,
            'allTest'   => $allTest,
        ]);
    }

    
}
