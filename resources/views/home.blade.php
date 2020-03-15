@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="/css/main.css">

  <div  class="row mb-2">
        <div   class="col-sm-8  col-md-offset-2"> 
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <a href="/Details1"><strong id="name" class="d-inline-block mb-2 text-primary">BRAVEHEART (1995)</strong></a>
                    <h5 class="mb-0">วีรบุรุษหัวใจมหากาฬ (1995)</h5>
                    {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
                    <p class="card-text mb-auto">เมื่อเจ้าสาวที่เป็นความลับของเขาถูกประหารสำหรับการโจมตีทหารอังกฤษที่พยายามข่มขืนเธอวิลเลียมวอลเลซเริ่มการประท้วงต่อต้านกษัตริย์เอ็ดเวิร์ดที่ 1 แห่งอังกฤษ.</p>
                    <p> Director: Mel Gibson</p>
                    <p>Writer: Randall Wallace</p>  
                    <p>Stars: Mel Gibson, Sophie Marceau, Patrick McGoohan </p>   
                    <a href="https://www.imdb.com/title/tt0112573/fullcredits/?ref_=tt_ov_st_sm">อ่านต่อได้ที่นี่</a> 
                </div>
                <a href="/Details1"><img  width="194" width="auto" src="https://m.media-amazon.com/images/M/MV5BMzkzMmU0YTYtOWM3My00YzBmLWI0YzctOGYyNTkwMWE5MTJkXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,677,1000_AL_.jpg" alt=""></a>
            </div>
        </div>
    </div>
        

        
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post your comment</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="center">
                        <form id="comment-form" method="post" action="{{ route('comments.store') }}" >
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                            <div class="row" style="">
                                <div class="form-group col-md-12" >
                                    <textarea class="form-control" name="comment" placeholder="Write something from your heart..!"></textarea>
                                </div>
                            </div>
                            <div class="row" style="padding: 0 10px 0 10px;">
                                <div class="form-group col-md-12">
                                    <input type="submit" class="btn btn-primary btn-lg" style="width: 100%" name="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           <div class="panel panel-default">
               <div class="panel-heading">Comments</div>

               <div class="panel-body comment-container" >
                   
                   @foreach($comments as $comment)
                       <div class="well">
                           <i><b> {{ $comment->name }} {{ $comment->created_at }} </b></i><br>
                           &nbsp;&nbsp;<span> {{ $comment->comment }} </span>
                           <div style="margin-left:10px;">
                            &nbsp;&nbsp; <a style="cursor: pointer;color:#1E90FF;text-decoration:underline;" cid="{{ $comment->id }}" name_a="{{ Auth::user()->name }}" token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;
                               <a style="cursor: pointer;color:#1E90FF;text-decoration:underline;"  class="delete-comment" token="{{ csrf_token() }}" comment-did="{{ $comment->id }}" >Delete</a>
                               <div class="reply-form">
                                   
                                   <!-- Dynamic Reply form -->
                                   
                               </div>
                               @foreach($comment->replies as $rep)
                                    @if($comment->id === $rep->comment_id)
                                       <div class="well">
                                           <i><b> {{ $rep->name }} {{ $rep->created_at }}</b></i><br>
                                           &nbsp;&nbsp;<span> {{ $rep->reply }} </span>
                                           <div style="margin-left:10px;">
                                            &nbsp;&nbsp;
                                              
                                           </div>
                                           <div class="reply-to-reply-form">
                                   
                                               <!-- Dynamic Reply form -->
                                               
                                           </div>
                                           
                                       </div>
                                   @endif 
                               @endforeach
                               
                           </div>
                       </div>
                   @endforeach

               </div>
           </div>
       </div>
   </div>

  

</div>
<hr>
<footer class=" col-md-7  col-md-offset-2"> Copyright © 2020  Movie review</footer>
@endsection
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>

