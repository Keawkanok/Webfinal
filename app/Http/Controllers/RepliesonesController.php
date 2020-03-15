<?php

namespace App\Http\Controllers;

use App\repliesones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepliesonesController extends Controller
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
        // if (Auth::check()) {
        //     repliesones::create([
        //         'comment_id' => $request->input('comment_id'),
        //         'name' => $request->input('name'),
        //         'reply' => $request->input('reply'),
        //         'user_id' => Auth::user()->id
        //     ]);

        //     return redirect()->route('Details')->with('success','Reply added');
        // }

        // return back()->withInput()->with('error','Something wronmg');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\repliesones  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(repliesones $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\repliesones $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(repliesones $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\repliesones $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, repliesones $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\repliesones $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(repliesones $reply)
    {
        // if (Auth::check()) {
        //     $reply = repliesones::where(['id'=>$reply->id,'user_id'=>Auth::user()->id]);
        //     if ($reply->delete()) {
        //         return 1;
        //     }else{
        //         return 2;
        //     }
        // }else{

        // }
        // return 3;
    }
}
