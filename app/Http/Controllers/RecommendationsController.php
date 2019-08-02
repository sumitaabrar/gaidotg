<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recommendation;
use App\User;
use App\Announcement;

use Emojione\Emojione;
use Emojione\Client as EmojioneClient;

class RecommendationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        //Fetching all Announcements
        $allAnn = Announcement::orderBy('created_at', 'desc')->get();

        return view('pages.recommendations')->with([ 
            'allRec'    => $allRec,
            'allAnn'    => $allAnn,
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
            'recommendation' => 'required',
            'image' => 'image|nullable|max:1999',
            ]);
    
            //Handle Image Upload
            if($request->hasFile('image')){
                //Get Filename with Extension
                $fileNameWuthExt = $request->file('image')->getClientOriginalName();
                //Get just the Filename
                $filename = pathinfo($fileNameWuthExt, PATHINFO_FILENAME);
                //Get just the Extension
                $ext = $request->file('image')->getClientOriginalExtension();
                //Filename that will be stored
                $fileNameToStore = auth()->user()->id.time().'_'.$filename.'.'.$ext;
                //Upload image
                $path = $request->file('image')->storeAs('public/images/posts', $fileNameToStore);
            }
            else{
                $fileNameToStore = 'img0.jpg';
            }

        $rec = new Recommendation;
        $rec->user_id = auth()->user()->id;
        $recBody = Emojione::toShort($request->recommendation);
        $rec->body = $recBody;
        $rec->image = $fileNameToStore;
        $rec->is_open = true;

        $rec->save();

        return(redirect('/rec')->with('success','Recommendation has been added'));
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
