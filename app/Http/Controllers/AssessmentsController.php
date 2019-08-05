<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assessment;
use App\Brand;
use App\BrandUser;

use App\Suggestion;
use App\Rating;
use App\Ranking;
use App\Review;

use Auth;

class AssessmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:brand');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bId = auth()->user()->brand_id;
        $a = Assessment::where('brand_id', $bId)->orderBy('created_at', 'desc')->first();
        return view('pages.brands.report')->with('a', $a);
    }

    
    public function create()
    {
        
        $bId = auth()->user()->brand_id;

        $sb = Suggestion::where('brand_id', $bId)->count();

        $rt = Rating::where('brand_id', $bId)->avg('rating');
        $rt = number_format($rt, 1, '.', '');

        $rk = Ranking::where('brand_id', $bId)->orderBy('created_at', 'desc')->first();
        $rk = $rk->ranking;

        $sc = Review::where('brand_id', $bId)->avg('score');
        $sc = number_format($sc, 0, '.', '');

        $rimg = exec('F:\R\R-3.5.1\bin\Rscript.exe E:\xampp\htdocs\gaidotg\public\R_engine\rating_graph.R '.$bId);
        $rimg = substr($rimg,4);
        $rimg = trim($rimg,'"');
    
        $simg = exec('F:\R\R-3.5.1\bin\Rscript.exe E:\xampp\htdocs\gaidotg\public\R_engine\sentiment_graph.R '.$bId);
        $simg = substr($simg,4);
        $simg = trim($simg,'"');
    
        $a = new Assessment;
        $a->brand_id = $bId;
        $a->rating = $rt;
        $a->ranking = $rk;
        $a->score = $sc;
        $a->suggested_by = $sb;
        $a->rating_img = $rimg;
        $a->score_img = $simg;

        $a->save();


        return view('pages.brands.report')->with([
            "a" => $a,
        ]);
    }

    public function createRanking(){
        //Call R File to be executed.
        $a=1;
        exec('F:\R\R-3.5.1\bin\Rscript.exe E:\xampp\htdocs\gaidotg\public\R_engine\ranking.R '.$a);
   
    }
   
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
