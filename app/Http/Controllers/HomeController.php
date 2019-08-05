<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Discussion;
use App\Recommendation;
use App\Suggestion;
use Auth;


use Emojione\Emojione;
use Emojione\Client as EmojioneClient;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $user = Auth::user();


        $emojioneClient = new EmojioneClient();
        $emojioneClient->cacheBustParam = '';
        $emojioneClient->imagePathPNG = 'https://cdnjs.cloudflare.com/ajax/libs/emojione/2.2.7/assets/png/';
        Emojione::setClient($emojioneClient);


        //Fetching user's discussions
        $allDis = Discussion::where('user_id', Auth::user()->id)->get();
        //converting emoji shortnames into emoji icons
        foreach($allDis as $dis)
        {
            $body = htmlspecialchars($dis->body);
            $body = Emojione::shortnameToImage($body); 
            $body = nl2br($body);
            $dis->body = $body;
        }

        //Fetching user's recommendations
        $allRec = Recommendation::where('user_id', Auth::user()->id)->get();
        //converting emoji shortnames into emoji icons
        foreach($allRec as $rec)
        {
            $body = htmlspecialchars($rec->body);
            $body = Emojione::shortnameToImage($body);
            $body = nl2br($body);
            $rec->body = $body;
        }

        //Fetching user's suggestions
        $allSug = Suggestion::get()->where('user_id',Auth::user()->id);

        return view('pages.home')->with([
            'user' => $user,
            'allDis'=> $allDis,
            'allRec' => $allRec,
            'allSug' => $allSug,
        ]);

        //The user's profile is the Home. 
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'image' => 'image|nullable|max:1999'
        ]);

        $u = User::find($id);

        
        $u->name = $request->name;

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
            $path = $request->file('image')->storeAs('public/images/users', $fileNameToStore);

            $u->image = $fileNameToStore;
        }
        
        $u->save();

        return(redirect('/home'));
    }
}
