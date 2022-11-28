Mostrar lista de libros
@if(Session::has('msg'))
{{Session::get('msg')}}
@endif
<a href="{{url('books/create')}}">Nuevo Libro</a>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
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
                        <td><img src="{{ asset('storage'.'/'.$book->front)}}" alt="Portada del libro" width="90"></td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->pages }}</td>
                        <td>{{ $book->ISBN }}</td>


                           <td>
                            <a href="{{url('/books/'.$book->id .'/edit')}}">Editar</a>
                            <form action="{{url('/books/'.$book->id)}}"  method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" onclick="return confirmation('Realamente desea eliminar')" value="Eliminar">
                        </form>
                    </td>
                    </tr>
            @endforeach

        </tbody>
    </table>
</div>
