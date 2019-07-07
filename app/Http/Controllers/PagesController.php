<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Subcategory;
use App\Type;
use App\Assessment;
use App\Outlet;

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

    public function test(){
        $allT = Brand::where('id', 1)->get();
        $allA = Assessment::where('brand_id',1)->get();
        $allB = Outlet::where('brand_id',1)->get();
        
        return view('pages.test')->with('allT', $allT)->with('allA', $allA)->with('allB', $allB);
    }
}
