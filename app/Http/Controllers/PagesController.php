<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view ('pages.index');
    }
    public function bProfile(){
        return view ('pages.bProfile');
    }
    public function userProfile(){
        return view('pages.userProfile');
    }
    public function uSignup(){
        return view('pages.uSignup');
    }



    public function page2(){
        return view('pages.page2');
    }

    public function timeline(){
        return view('pages.timeline');
    }

    



}
