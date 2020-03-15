<?php

namespace App\Http\Controllers;

use App\repliesthrees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepliesthreesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if (Auth::check()) {
            repliesthrees::create([
                'comment3_id' => $request->input('comment3_id'),
                'name' => $request->input('name'),
                'reply' => $request->input('reply'),
                'user_id' => Auth::user()->id
            ]);

            return redirect()->route('CommentAll.Comment3s')->with('success','Reply added');
        }

        return back()->withInput()->with('error','Something wrong');
    }

    /**
     * Display the specified resource.
     *
     * @param   \App\repliesthrees  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(repliesthrees $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   \App\repliesthrees  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(repliesthrees $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   \App\repliesthrees  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, repliesthrees $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   \App\repliesthrees  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(repliesthrees $reply)
    {
        if (Auth::check()) {
            $reply = repliesthrees::where(['id'=>$reply->id,'user_id'=>Auth::user()->id]);
            if ($reply->delete()) {
                return 1;
            }else{
                return 2;
            }
        }else{

        }
        return 3;
    
    }
}
