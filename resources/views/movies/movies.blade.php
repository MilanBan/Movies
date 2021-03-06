@extends('layouts.home')

@section('content')           
           @if($movies)
            <div>
                <div class="card" style="width: 18rem;">
                  @foreach($movies as $movie)
                  <div class="card-body">
                    <div class="title m-b-md"><a href="{{ route('single-movie', [ 'id' => $movie->id]) }}">{{ $movie->title }}</a></div>
                    <div class="title m-b-md"><a href="{{ route('zanr') }}">{{ $movie->zanr }}</a></div>
                  </div>
                  @endforeach
                </div>
            </div>
            @endif
@endsection
    

