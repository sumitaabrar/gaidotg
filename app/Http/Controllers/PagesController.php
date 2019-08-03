<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function bProfile(){
        return view('pages.bProfile');
    }
    public function displayRec(){
        return view('pages.displayRec');
    }


}
