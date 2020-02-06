@extends('layouts.home')

@section('content')
    @if($movie)
    <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <p class="card-text">{{ $movie->zanr }}</p>
            <p class="card-text">{{ $movie->reziser }}</p>
            <p class="card-text">{{ $movie->godina }}</p>
            <p class="card-text">{{ $movie->storyline }}</p>
        </div>
        <div>
            @if(count($movie->comments))
            @foreach($movie->comments as $comment)
                <div class="form-group">
                    <li>
                        <p>{{ $comment->content }}</p>
                        <!-- <p>{{ $comment->autor }}</p> -->
                    <li>
                </div>
            @endforeach
            @endif
        </div>
        <div>
            <div><H2>Ostavi Komentar</H2></div>
            <form method="POST" action="/movies/{{$movie->id}}/comments"> <!--{{ route('comment-movie', [ 'id' => $movie->id]) }} -->
                @csrf
                <!-- <div class="form-group">
                     <lable for="autor">Autor</lable>
                     <input type="text" id="autor" name="autor"/>
                     </div> -->

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea type="text" id="content" name="content" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <button type="submit">Submit</button>
                    </form>
                    <a href="/movies" class="btn btn-primary">Go Back</a>
                </div>
        </div>
    </div>
    @endif
@endsection