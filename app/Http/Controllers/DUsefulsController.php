<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\User;
use App\DUseful;


class DUsefulsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            
        ]);

        $u = new DUseful;
        $u->discussion_id = $request->discussion_id;
        $u->user_id = auth()->user()->id;
        $u->useful = $request->useful;

        $u->save();

        return(redirect('/dis/#dis'.$request->discussion_id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            
        ]);

        $u = DUseful::find($id);

        //User has clicked useful
        if ($request->useful == 1) {
            //He had already marked this dis as useful
            if ($u->useful == 1) {
                //delete that usesul
                $u->delete();
            } 
            //He had previuosly marked this dis as unuseful
            else {
                //change his unuseful to useful
                $u->useful=1;
                $u->save();
            }    
        } 
        
        //User has clicked unuseful
        else {
            //He had already marked this dis as unuseful
            if ($u->useful == 0) {
                //delete that unusesul
                $u->delete();
            } 
            //He had previuosly marked this dis as useful
            else {
                //change his useful to unuseful
                $u->useful=0;
                $u->save();
            }
        }

        return(redirect('/dis/#dis'.$request->discussion_id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
