<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Brand;
use App\Category;
use App\Type;
use App\Discussion;
use App\Recommendation;
use App\Testimonial;
use App\User;

use Emojione\Emojione;
use Emojione\Client as EmojioneClient;

class PagesController extends Controller
{
    public function displayRec(){
        return view('pages.displayRec');
    }

    public function index(){
        return view('pages.index');
    }

    public function product(){
        return view('pages.reviewProductSearch');
    }

    public function place(){
        return view('pages.reviewPlaceSearch');
    }

    public function gSearch(){
        $brands = Brand::orderBy('created_at', 'desc')->take(10)->get();

        return view('pages.search')->with('brands', $brands);
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
            $body = (Str::limit($dis->body, 100));
            $body = htmlspecialchars($body);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $dis->body = $body;
        }

        //Fetching related Recommendations
        $allRec = Recommendation::where('body', 'LIKE', '%'.$key.'%')->orderBy('created_at', 'desc')->get();
        foreach($allRec as $rec)
        {
            $body = (Str::limit($rec->body, 100));
            $body = htmlspecialchars($body);
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

    public function sSearch(){

        //Fetching top 10 Brands
        $brands = Brand::orderBy('created_at', 'desc')->take(10)->get();

        return view('pages.sSearch')->with('brands', $brands);
    }

    public function searchBrand( Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);

        $id = $request->id;

        if($id == 0){

            $key = $request->key;
            //Fetching related Brands
            $brands = Brand::where('name', 'LIKE', '%'.$key.'%')
                            ->orwhere('description', 'LIKE', '%'.$key.'%' )
                            ->get();
            return view('pages.sSearch')->with([
                'brands'=> $brands,
                'key'   => $key,
                ]);

        }

        else{
            //Fetching matching Brands
            $brands = Brand::where('type_id', $id)->get();
            $q = Type::where('id', $id)->first();

            $key = $q->name;

            return view('pages.sSearch')->with([
                'brands'=> $brands,
                'key'   => $key,
                ]);   
        }

        
    }

    public function reviewSearch( Request $request)
    {
        $this->validate($request, [
            'key'=> 'required',
            'id' => 'required',
        ]);

        $key = $request->key;
        $id = $request->id;

        //Fetching matching Brands
        $brands = Brand::where('category_id', $id)
                        ->where(function($q) use($key){
                            $q->where('description', 'LIKE', '%'.$key.'%' )
                              ->orwhere('name', 'LIKE', '%'.$key.'%');
                        })
                        ->get();

        if($id == 2)
            return view('pages.reviewPlaceSearch')->with(['brands'=>$brands,'key'=>$key]);
        else
            return view('pages.reviewProductSearch')->with(['brands'=> $brands, 'key'=>$key]);
    }



    public function testStore( Request $request)
    {
        if($request->test != NULL){
            $t = new Testimonial;

            $t->user_id = auth()->user()->id;
            $t->body = $request->test;

            $t->save();

            return(redirect()->back()->with('success', 'Thank you for sharing your experience with us.'));
        }

        return(redirect()->back());
    }
}
