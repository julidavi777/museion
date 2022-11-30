@extends('layouts.app')
@section('content')
    <div class="container">

        @if (Session::has('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">

                <strong> {{ Session::get('msg') }}</strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif


        <a class="btn btn-success mb-3" href="{{ url('books/create') }}">Nuevo Libro</a>
        <div class="table-responsive">
            <table class="table table-dark table-striped  ">
                <thead>
                    <tr>

                        <th scope="col">Título</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Páginas</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($bookCase as $book)
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->pages }}</td>
                        <td>{{ $book->ISBN }}</td>


                        <td class="">
                            <a class="mb-3 btn btn-primary" href="{{ url('books/' . $book->id) }}">Detalles</a>

                            <a class=" mb-3 btn btn-warning" href="{{ url('/books/' . $book->id . '/edit') }}">Editar</a>
                            <form action="{{ url('/books/' . $book->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class=" btn btn-danger" type="submit" value="Eliminar">
                            </form>
                        </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
