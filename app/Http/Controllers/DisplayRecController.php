<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

use App\User;
use App\Brand;
use App\Rating;


class DisplayRecController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
  public function index(){

    $str_arr = explode (" ", $_GET['arr']);  

    //make a new collection
    $brands = new Collection();

    //add remaining brands from array
    $i=1;
    foreach($str_arr as $bId)
    { 
      $brand = Brand::where('id', $bId)->get()->first();
      $brands->put($i, $brand);
      $i++;
    }

              
    return view('pages.displayRec')->with('brands', $brands);
  }

  public function display(Request $request){

    $pId = $request->type;
    $uId = auth()->user()->id;
    $count = 0;

    $rs = Rating::where('user_id',$uId)->get();
    foreach($rs as $r){
       $t = $r->brand->type_id;
       if($t == $pId)
        $count++;
    }

    if($count>1)
    {
      return redirect('http://localhost:8000/recomm?id='.$uId.'&pref='.$pId);
    }
    
    else{

      $brands = DB::table('brands')->join('rankings', 'brands.id', '=', 'rankings.brand_id')
                                    ->select('brands.*', 'rankings.ranking')->where('brands.type_id',$pId)
                                    ->orderBy('rankings.ranking', 'asc')->take(4)->get();

      return view('pages.displayRec')->with('brands', $brands);
    } 

  }
}