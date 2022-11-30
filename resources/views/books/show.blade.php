@extends('layouts.app')
@section('content')
    <div class="container bg-secondary text-white card rounded mt-5 px-5 py-3 mb-3 ">
        <h1 class="text-center mb-4">Detalles del libro </h1>
        <div class="row">
            <div class="col">
                <img class="text-center img-thumbnail img-fluid mb-3 " src="{{ Storage::url($bookCase->front) }}" width="350"
                    height="310" class="mb-5">
            </div>
            <div class="col m-auto">
                <p class="card-text"> <b>Título:</b> {{ $bookCase->title }} </p>
                <p class="card-text mb-3"> <b>Autor:</b> {{ $bookCase->author }} </p>
                <p class="card-text mb-3"> <b>páginas:</b> {{ $bookCase->pages }} </p>
                <p class="card-text mb-3"> <b>ISBN:</b> {{ $bookCase->ISBN }} </p>
                <form action="/books">
                    <input class="btn btn-primary" type="submit" value="Prestar">
                </form>

            </div>
        </div>
    </div>
    <div class=" ">
        <div class="row">

            <div class="text-center p-3">
            </div>

        </div>
    </div>
@endsection
