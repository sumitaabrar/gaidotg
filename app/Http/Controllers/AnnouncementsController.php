<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\Brand;


class AnnouncementsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:brand');
    }
    
    
    public function index()
    {
        return view('pages.brands.ann');
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
            'ann_title' => 'required',
            'ann' =>'required',
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
            $path = $request->file('image')->storeAs('public/images/ann', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'img0.jpg';
        }

        $a = new Announcement;
        $a->brand_id = auth()->user()->brand_id;
        $a->title = $request->ann_title;
        $a->body = $request->ann;
        $a->image = $fileNameToStore;

        if($request->ann_url)
            $a->url = $request->ann_url;

        $a->save();

        return(redirect()->back()->with('success','Announcement has been added'));
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
