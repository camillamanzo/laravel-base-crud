@extends('layouts.main')

@section('content')

    <h1 class="text-center my-5">Insert your comic's information below</h1>
    
    <div class="card-body">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-6 mb-4">
                    <label for="title" class="form-label">Title:</label>
                    <input class="form-control" type="text" id="title" name="title" placeholder="Insert your favorite comic's title" required>
                </div>

                <div class="col-6 mb-4">
                    <label for="img_url" class="form-label">Image:</label>
                    <input class="form-control" type="text" id="img_url" name="img_url" placeholder="Insert the cover image url">
                </div>

                <div class="col-6 mb-4">
                    <label for="release_date" class="form-label">Release date:</label>
                    <input class="form-control" type="text" id="release_date" name="release_date" placeholder="Insert the first comic's release date" required>
                </div>

                <div class="col-6 mb-4">
                    <label for="food_type" class="form-label">Original language:</label>
                    <input class="form-control" type="text" id="original_language" name="original_language" placeholder="Insert the original language of the comic" required>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <a class="text-center" href="{{ route('comics.index') }}">Torna alla lista degli ospiti</a>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Insert new comic</button>
                        <button type="reset" class="btn btn-danger me-3">Delete</button>
                    </div>
                </div>

                
                
            </div>
    </div>

        </form>

    </div>
@endsection 