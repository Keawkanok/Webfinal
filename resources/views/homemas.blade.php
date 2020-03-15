@extends('layouts.app')

@section('content')
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <div class="center">
        <form id="comment-form" method="post" action="{{ route('Ratings.store') }}" >
            {{ csrf_field() }}
            {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" > --}}
            <div class="form-group" align="center" > 
                <i  class="fas fa-meteor fa-2x " data-index="0"  ></i>
                <i  class="fas fa-meteor fa-2x " data-index="1"  ></i>
                <i  class="fas fa-meteor fa-2x " data-index="2"  ></i>
                <i  class="fas fa-meteor fa-2x " data-index="3"  ></i>
                <i  class="fas fa-meteor fa-2x " data-index="4"  ></i>
                <div>
                    {{-- <input type="submit" class="btn btn-primary" value="submit" > --}}
                </div>
                <span class="info"></span>
                <br>
            </div>
            <br>
        </form>
    </div>

    {{-- @foreach($ratings ?? '' as $rating)

        <i><b> {{ $rating->name }} {{ $rating->created_at }} </b></i><br>
        &nbsp;&nbsp;<span> {{ $rating->rating }} </span>

    @endforeach --}}

 

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('/js/star.js') }}"></script>
s
{{-- <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script> --}}


@endsection