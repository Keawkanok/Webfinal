<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\comment1;
use App\Comment3;
use App\Comment4;
use App\Comment5;
use App\Comment6;
use App\Comment7;
use App\Comment8;
use App\Comment9;
use App\Comment10;
use App\Rating;
use App\Post;
use App\User;




// use App\Raing;

// use App\Http\Controllers\Message;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        
        // $this->middleware(['auth' => 'verified']);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // ดึง ไฟล์จาก Comment 
    public function index(){

        $comments = Comment::latest('created_at')->get();
        return view('home', ['comments' => $comments]);
        
    }
    public function indexone(){

        $comments = comment1::latest('created_at')->get();
        return view('Details', ['comments' => $comments]);
    
    }
    public function indexthree(){

        $comments = Comment3::latest('created_at')->get();
        return view('CommentAll.Comment3s', ['comments' => $comments]);
    
    }
    public function indexfour(){

        $comments = Comment4::latest('created_at')->get();
        return view('CommentAll.Comment4s', ['comments' => $comments]);
    
    }
    public function indexfive(){

        $comments = Comment5::latest('created_at')->get();
        return view('CommentAll.Comment5s', ['comments' => $comments]);
    
    }
    public function indexsix(){

        $comments = Comment6::latest('created_at')->get();
        return view('CommentAll.Comment6s', ['comments' => $comments]);
    
    }
    public function indexseven(){

        $comments = Comment7::latest('created_at')->get();
        return view('CommentAll.Comment7s', ['comments' => $comments]);
    }
    public function indexeight(){

        $comments = Comment8::latest('created_at')->get();
        return view('CommentAll.Comment8s', ['comments' => $comments]);
    
    }
    public function indexnine(){

        $comments = Comment9::latest('created_at')->get();
        return view('CommentAll.Comment9s', ['comments' => $comments]);
    
    }
    
    public function indexten(){

        $comments = Comment10::latest('created_at')->get();
            return view('CommentAll.Comment10s', ['comments' => $comments]);
    
    }
    
    public function indexRating(){

        $ratings = Rating::latest('created_at')->get();
        return view('homemas', ['ratings' => $ratings]);
    
    }


}
