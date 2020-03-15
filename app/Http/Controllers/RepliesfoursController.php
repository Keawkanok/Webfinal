<?php

namespace App\Http\Controllers;

use App\repliesfours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RepliesfoursController extends Controller
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
            repliesfours::create([
                'comment4_id' => $request->input('comment4_id'),
                'name' => $request->input('name'),
                'reply' => $request->input('reply'),
                'user_id' => Auth::user()->id
            ]);

            return redirect()->route('CommentAll.Comment4s')->with('success','Reply added');
        }

        return back()->withInput()->with('error','Something wronmg');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\repliefours  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(repliefours $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\repliefours  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(repliefours $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\repliefours  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, repliefours $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\repliefours  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(repliefours $reply)
    {
        if (Auth::check()) {
            $reply = repliesfours::where(['id'=>$reply->id,'user_id'=>Auth::user()->id]);
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
