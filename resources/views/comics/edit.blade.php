@extends('layouts.main')

@section('content')

    <h1 class="text-center my-5">Change {{ $comic->title }}</h1>
    
    <div class="card-body">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="row">

                <div class="col-6 mb-4">
                    <label for="title" class="form-label">Title:</label>
                    <input class="form-control" value="{{ $comic->title }}" type="text" id="title" name="title" placeholder="ciaooooo" required>
                </div>

                <div class="col-6 mb-4">
                    <label for="img_url" class="form-label">Image:</label>
                    <input class="form-control" value="{{ $comic->img_url }}" type="text" id="img_url" name="img_url" placeholder="Insert the cover image url">
                </div>

                <div class="col-6 mb-4">
                    <label for="release_date" class="form-label">Release date:</label>
                    <input class="form-control" value="{{ $comic->release_date }}" type="text" id="release_date" name="release_date" placeholder="Insert the first comic's release date" required>
                </div>

                <div class="col-6 mb-4">
                    <label for="original_language" class="form-label">Original language:</label>
                    <input class="form-control" value="{{ $comic->original_language }}" type="text" id="original_language" name="original_language" placeholder="Insert the original language of the comic" required>
                </div>

                <div class="col-6 mb-4">
                    <label for="description" class="form-label">Description:</label>
                    <input class="form-control" value="{{ $comic->description }}" type="text" id="description" name="description" placeholder="Insert the description" required>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <a class="text-center" href="{{ route('comics.index') }}">Return to the list</a>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Insert new comic</button>
                        <button type="reset" class="btn btn-danger me-3">Delete</button>
                    </div>
                </div>   
            </div>

        </form>
    </div>
@endsection 