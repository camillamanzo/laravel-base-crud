
@extends('layouts.main')

@section('content')
    <h1>Io sono comics.show</h1>

    <a href="{{ route('comics.index')}}">Back to comics</a>

    <div>
        <img src="{{ $comic->img_url }}" width="200" alt="">
        <h3>Title: {{ $comic->title }}</h3>
        <p>Original language: {{ $comic->original_language }}</p>
        <p>First comic's release date: {{ $comic->release_date }}</p>
    </div>
@endsection