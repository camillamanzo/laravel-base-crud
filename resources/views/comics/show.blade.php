
@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row text-center">
            <h1 class="my-5">{{ $comic->title }}</h1>
    
            <div class="col-12">
                <img src="{{ $comic->img_url }}" width="200" alt="">
                <h3 class="my-3">Title: {{ $comic->title }}</h3>
                <p>Original language: {{ $comic->original_language }}</p>
                <p>First comic's release date: {{ $comic->release_date }}</p>
            </div>
        
            <a href="{{ route('comics.index')}}">Back to comics</a>
        </div>
    </div>
@endsection