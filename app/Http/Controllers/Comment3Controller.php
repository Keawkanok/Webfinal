<?php

namespace App\Http\Controllers;

use App\Comment3;
use App\repliesthrees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Comment3Controller extends Controller
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
            Comment3::create([
                'name' => Auth::user()->name,
                'comment' => $request->input('comment'),
                'user_id' => Auth::user()->id
            ]);

            return redirect()->route('CommentAll.Comment3s')->with('success','Comment Added successfully..!');
        }else{
            return back()->withInput()->with('error','Something wrong');
        }
    }

    /**
     * Display the specified resource.
     *  
     * @param  \App\Comment3 $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment3 $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment3 $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment3 $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment3 $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment3 $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment3 $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment3 $comment)
    {
        if (Auth::check()) {
            $reply = repliesthrees::where(['comment3_id'=>$comment->id]);
            $comment = Comment3::where(['user_id'=> Auth::user()->id, 'id'=>$comment->id]);
            if ($reply->count() > 0 && $comment->count() > 0) {
                $reply->delete();
                $comment->delete();
                return 1;
            }else if($comment->count() > 0){
                $comment->delete();
                return 2;
            }else{
                return 3;
            }

        }    
    }
}