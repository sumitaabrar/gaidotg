<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Subcategory;
use App\Type;
use App\Assessment;
use App\Outlet;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest:brand', 'guest:admin', 'guest:web']);
    }

    public function index()
    {
        return view('pages.index');
    }

    
}
