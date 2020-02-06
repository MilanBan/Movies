@extends('layouts.home')

@section('content')  

<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
           
<form method="POST" action="{{ route('store-movie') }}">
        @csrf
        <lable for="title">Title</lable>
        <input type="text" id="title" name="title"/>
        <lable for="zanr">Zanr</lable>
        <input type="text" id="zanr" name="zanr"/>
        <lable for="reziser">Reziser</lable>
        <input type="text" id="reziser" name="reziser"/>
        <lable for="godina">Godina</lable>
        <input type="text" id="godina" name="godina"/>

        <label for="storyline">Storyline</label>
        <textarea type="text" id="storyline" name="storyline" cols="30" rows="10"></textarea>

        <button type="submit">Submit</button>
    </form>

@endsection
