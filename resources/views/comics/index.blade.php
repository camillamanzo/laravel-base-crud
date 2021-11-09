
@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="mt-5 text-center">Best Comics:</h1>
            <a class="mb-5 text-center nav-link @if (request()->routeIs('comics.create')) active @endif" href="{{ route('comics.create') }}">
                <button class="btn btn-primary px-3">Add a comic</button>
            </a>

            @if (session('delete'))
                <div class="alert alert-success" role="alert">{{ session("delete") }}</div>
            @endif

            @foreach ($comics as $comic )
                <div class="col-3">
                    <img src="{{$comic->img_url}}" width="200" alt="">
                    <div class="text-start mb-5">
                        <h3 class="my-3">{{$comic->title}}</h3>
                        <a href="{{ route('comics.show', ['comic'=> $comic->id])}}">Read more</a>
                        <br>
                        <a href="{{ route('comics.edit', $comic->id) }}">Modify comic</a>
                        <br>

                        <form class="delete-item" action="{{ route('comics.destroy', $comic->id) }}" method="POST" data-comic-id="{{ $comic->id }}" data-comic-title="{{ $comic->title }}">
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

@section('script-section')

    <script>
        const deleteItems = document.querySelectorAll('.delete-item');
        
        deleteItems.forEach(element => {
            form.addEventListener('submit', function(event){
                event.preventDefault(); //blocca la funzionalità standard
                const id = form.getAttribute("data-comic-id");
                const title = form.getAttribute("data-comic-title");
                const confirm = window.confirm(`Are you sure you want to delete ${title}?`);
                if (confirm) this.submit();
            })
        });
    
    </script>
    
@endsection