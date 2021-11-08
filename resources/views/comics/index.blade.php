
@extends('layouts.main')

@section('content')
    <h1 class="my-5 text-center">Best Comics:</h1>
    <div class="container">
        <div class="row justify-content-center">

            @foreach ($comics as $comic )
                <div class="col-3 text-center">
                    <img src="{{$comic->img_url}}" width="200" alt="">
                    <h3 class="my-3">{{$comic->title}}</h3>
                    <a href="{{ route('comics.show', ['comic'=> $comic->id])}}">Read more</a>
                    <br>
                    <a href="{{ route('comics.edit', $comic->id)}}">Modify comic</a>
                </div>
            @endforeach
            
            <a class="my-5 text-center nav-link @if (request()->routeIs('comics.create')) active @endif" href="{{ route('comics.create') }}">
                <button class="btn btn-primary px-3">Add a comic</button>
            </a>
        </div>
    </div>
@endsection