@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="/css/main.css">


 {{-- 7 --}}
 <div class="row">
     <div class="col-md-8 col-md-offset-2">
         <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
             <div class="col p-4 d-flex flex-column position-static">
                 <a href="/Details7"><strong class="d-inline-block mb-2 text-primary">The Dark Knight (2008)</strong></a>
                 <h5 class="mb-0">อัศวินรัตติกาล (2008)</h5>
            {{-- <div class="mb-1 text-muted">Nov 12</div> --}}
            <p class="card-text mb-auto">
                เมื่อภัยคุกคามที่เรียกว่า Joker สร้างความหายนะและความโกลาหลให้กับชาว Gotham แบทแมนต้องยอมรับการทดสอบทางจิตวิทยาและทางร่างกายที่ยิ่งใหญ่ที่สุดอย่างหนึ่งของความสามารถของเขาในการต่อสู้กับความอยุติธรรม.</p>
                <p>Director: Christopher Nolan</p>
                <p>Writers: Jonathan Nolan (screenplay), Christopher Nolan (screenplay)</p>
                <p>Stars: Christian Bale, Heath Ledger, Aaron Eckhart</p>
                <a href="https://www.imdb.com/title/tt0468569/fullcredits/?ref_=tt_ov_st_sm">อ่านต่อได้ที่นี่</a>
            </div>
            <a href="/Details7"><img  width="181" width="auto" src="https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SY1000_CR0,0,675,1000_AL_.jpg" alt=""></a>
        </div>
    </div>
</div>

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
                        <form id="comment-form" method="post" action="{{ route('comment7.store') }}" >
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                            <div class="row" style="padding: 10px;">
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
                               <div class="reply-form">
                                   
                                   <!-- Dynamic Reply form -->
                                   
                               </div>
                              
                           </div>
                       </div>
                   @endforeach

               </div>
           </div>
       </div>
   </div>
</div>
<hr>
<footer class="col-md-8 col-md-offset-2"> Copyright © 2020  Movie review</footer>
@endsection

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
{{-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('/js/main1.js') }}"></script> --}}
{{-- <script type="" src="{{ asset('/js/app.js') }}"></script> --}}


