@extends('layouts.home')

@section('content')
    @if($zanr)
        @foreach($zanr->movies as $movie)
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <p class="card-text">{{ $movie->zanr }}</p>
                    <p class="card-text">{{ $movie->reziser }}</p>
                    <p class="card-text">{{ $movie->godina }}</p>
                    <p class="card-text">{{ $movie->storyline }}</p>
                </div>
            </div>
        @endforeach
    @endif
@endsection