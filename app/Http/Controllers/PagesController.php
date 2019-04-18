<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view ('pages.index');
    }

    public function page2(){
        return view('pages.page2');
    }

    public function timeline(){
        return view('pages.timeline');
    }


    public function index2(){
        return view ('pages.index2');
    }

    public function userProfile(){
        return view('pages.userProfile');
    }



}
