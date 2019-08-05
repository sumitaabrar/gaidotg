<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;
use App\Assessment;
use App\Outlet;
use App\Review;
use App\Rating;
use App\Announcement;
use App\Discussion;
use App\Recommendation;
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

        $assess = Assessment::where('brand_id', $bId)->orderBy('created_at', 'desc')->take(1)->get();
        $allOut = Outlet::where('brand_id', $bId)->get();
        $allAnn = Announcement::where('brand_id', $bId)->orderBy('created_at', 'desc')->get();

        $allRev = Review::where('brand_id', $bId)->orderBy('created_at', 'desc')->get();
        //converting emoji shortnames into emoji icons
        foreach($allRev as $rev)
        {
            $body = htmlspecialchars($rev->body);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $rev->body = $body;
        }
             
        $user = Brand::where('id', $bId)->first();

        return view('pages.brands.home')->with([ 
            'bId'       => $bId,
            'user'      => $user,
            'assess'    => $assess, 
            'allOut'    => $allOut,
            'allAnn'    => $allAnn, 
            'allRev'    => $allRev,
            ]);
    }

    public function discussion(){
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

        //Fetching all Announcements
        $allAnn = Announcement::orderBy('created_at', 'desc')->get();
        
        return view('pages.brands.discussions')->with([
            'allDis'    => $allDis,
            'allAnn'    => $allAnn,
            ]);
    }

    public function recommendation(){
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

        return view('pages.brands.recommendations')->with([ 
            'allRec'    => $allRec,
            'allAnn'    => $allAnn,
            ]);
    }

    public function update(Request $request, $bId)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'logo' => 'image|nullable|max:1999',
            'cover' => 'image|nullable|max:1999',
        ]);

        $u = Brand::find($bId);

        
        $u->name = $request->name;
        $u->website = $request->website;
        $u->contact = $request->contact;
        $u->description = $request->description;

        //Handle Logo Upload
        if($request->hasFile('logo')){
            //Get Filename with Extension
            $fileNameWuthExt = $request->file('logo')->getClientOriginalName();
            //Get just the Filename
            $filename = pathinfo($fileNameWuthExt, PATHINFO_FILENAME);
            //Get just the Extension
            $ext = $request->file('logo')->getClientOriginalExtension();
            //Filename that will be stored
            $fileNameToStore = auth()->user()->id.time().'_'.$filename.'.'.$ext;
            //Upload image
            $path = $request->file('logo')->storeAs('public/images/users/brands', $fileNameToStore);

            $u->logo = $fileNameToStore;
        }

        //Handle Cover Upload
        if($request->hasFile('cover')){
            //Get Filename with Extension
            $fileNameWuthExt = $request->file('cover')->getClientOriginalName();
            //Get just the Filename
            $filename = pathinfo($fileNameWuthExt, PATHINFO_FILENAME);
            //Get just the Extension
            $ext = $request->file('cover')->getClientOriginalExtension();
            //Filename that will be stored
            $fileNameToStore = auth()->user()->id.time().'_'.$filename.'.'.$ext;
            //Upload image
            $path = $request->file('cover')->storeAs('public/images/cover', $fileNameToStore);

            $u->cover_photo = $fileNameToStore;
        }
        
        $u->save();

        return(redirect('/brandHome'));
    }
}
