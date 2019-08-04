<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assessments;
use App\Brand;

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
        return view('pages.brands.report');
    }

    
    public function create()
    {
        return view('pages.brands.report');
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
