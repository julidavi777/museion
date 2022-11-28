Formulario de creacion de libros
<form action="{{url('/books')}}" method="post" enctype="multipart/form-data">
    @csrf

@include('books.form', ['mode'=>'Añadir', 'action'=>'nuevo'])
</form>
