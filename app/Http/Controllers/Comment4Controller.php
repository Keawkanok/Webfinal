<?php

namespace App\Http\Controllers;

use App\Comment4;
// use App\repliesthrees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Comment4Controller extends Controller
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
            Comment4::create([
                'name' => Auth::user()->name,
                'comment' => $request->input('comment'),
                'user_id' => Auth::user()->id
            ]);

            return redirect()->route('CommentAll.Comment4s')->with('success','Comment Added successfully..!');
        }else{
            return back()->withInput()->with('error','Something wrong');
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::check()) {
            $reply = repliesthrees::where(['comment4_id'=>$comment->id]);
            $comment = Comment4::where(['user_id'=> Auth::user()->id, 'id'=>$comment->id]);
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