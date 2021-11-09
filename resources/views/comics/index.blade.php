
@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="mt-5 text-center">Best Comics:</h1>
            <a class="mb-5 text-center nav-link @if (request()->routeIs('comics.create')) active @endif" href="{{ route('comics.create') }}">
                <button class="btn btn-primary px-3">Add a comic</button>
            </a>
            
            @foreach ($comics as $comic )
                <div class="col-3">
                    <img src="{{$comic->img_url}}" width="200" alt="">
                    <div class="text-start mb-5">
                        <h3 class="my-3">{{$comic->title}}</h3>
                        <a href="{{ route('comics.show', ['comic'=> $comic->id])}}">Read more</a>
                        <br>
                        <a href="{{ route('comics.edit', $comic->id) }}">Modify comic</a>
                        <br>

                        <form action="{{ route('comics.destroy',$comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection