<?php

namespace App\Http\Controllers;

use App\comment1;
use App\repliesones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Comment1Controller extends Controller
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
        // Auth คือ  Authentication มีระบบ แบบอัตโนมัตมาให้ในตัวอยู่แล้ว เราไม่ต้องเขียนระบบ Login, Logout เอง
        if (Auth::check()) {
            comment1::create([
                'name' => Auth::user()->name,
                'comment' => $request->input('comment'),
                'user_id' => Auth::user()->id
            ]);
                                    // ดีเทล
            return redirect()->route('Details')->with('success','Comment Added successfully..!');
        }else{
            return back()->withInput()->with('error','Something wrong');
        }


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comment1  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(comment1 $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comment1  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment1 $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comment1  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment1 $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comment1  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment1  $comment)
    {
        // if (Auth::check()) {
        //     $reply = repliesones::where(['comment_id'=>$comment->id]);
        //     $comment = comment1::where(['user_id'=> Auth::user()->id, 'id'=>$comment->id]);
        //     if ($reply->count() > 0 && $comment->count() > 0) {
        //         $reply->delete();
        //         $comment->delete();
        //         return 1;
        //     }else if($comment->count() > 0){
        //         $comment->delete();
        //         return 2;
        //     }else{
        //         return 3;
        //     }

        // }    
    }
}
