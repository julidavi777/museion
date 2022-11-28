<form action="{{url('/books/'.$bookCase->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    @include('books.form')
</form>

