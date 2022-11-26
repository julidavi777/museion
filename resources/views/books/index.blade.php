Mostrar lista de libros
/*
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Portada</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Páginas</th>
                <th scope="col">ISBN</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookCase as $book)
            <tr class="">
                    <td>{{ $book->id}}</td>
                    <td>{{ $book->front }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->pages }}</td>
                    <td>{{ $book->ISBN }}</td>
                    <td><form action="{{ url('/books/'.$book->id) }}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <input type="submit" onclick="return confirmation('Realamente desea eliminar')" value="Eliminar">
                    </form>
                </td>
                </tr>
                @endforeach

        </tbody>
    </table>
</div>
