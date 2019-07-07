<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Type;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function bProfile(){
        return view('pages.bProfile');
    }

    public function test(){
        $allT = Type::where('subcategory_id', 1)->get();
        
        return view('pages.test')->with('allT', $allT);
    }
}
