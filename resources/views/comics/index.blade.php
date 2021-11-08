
@extends('layouts.main')

@section('content')
    <h1>Best Comics:</h1>

    @foreach ($comics as $comic )
        <div>
            <img src="{{$comic->img_url}}" width="200" alt="">
            <h3>{{$comic->title}}</h3>
            <p>{{$comic->release_date}}</p>
            <a href="{{ route('comics.show', ['comic'=> $comic->id])}}">Read more</a>

        </div>
        
    @endforeach
@endsection