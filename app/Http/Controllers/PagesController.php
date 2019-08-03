<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Discussion;
use App\Recommendation;

use Emojione\Emojione;
use Emojione\Client as EmojioneClient;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function product(){
        return "products";
    }

    public function place(){
        return "palces";
    }

    
    public function search( Request $request)
    {
        $this->validate($request, [
            'key' => 'required',
        ]);

        $key = $request->key;

        //Fetching related Brands
        $brands = Brand::where('name', 'LIKE', '%'.$key.'%')
                        ->orwhere('description', 'LIKE', '%'.$key.'%' )
                        ->get();

        //Fetching related Discussions
        $allDis = Discussion::where('body', 'LIKE', '%'.$key.'%')->orderBy('created_at', 'desc')->get();
        foreach($allDis as $dis)
        {
            $body = htmlspecialchars($dis->body);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $dis->body = $body;
        }

        //Fetching related Recommendations
        $allRec = Recommendation::where('body', 'LIKE', '%'.$key.'%')->orderBy('created_at', 'desc')->get();
        foreach($allRec as $rec)
        {
            $body = htmlspecialchars($rec->body);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $rec->body = $body;
        }


        return view('pages.search')->with([
            'key'       =>$key,
            'brands'    => $brands,
            'allDis'    => $allDis,
            'allRec'    => $allRec,
        ]);
    }
}
