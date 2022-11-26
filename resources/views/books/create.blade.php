Formulario de creacion de libros
<form action="{{url('/books')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
      <label for="title"form-label">Titulo</label>
      <input type="text" class="form-control" name="title">
    </div>

    <div class="mb-3">
        <label for="author"form-label">Autor</label>
        <input type="text" class="form-control" name="author">
      </div>

      <div class="mb-3">
        <label for="pages"form-label">Número de páginas</label>
        <input type="text" class="form-control" name="pages">
      </div>

      <div class="mb-3">
        <label for="ISBN" form-label">ISBN</label>
        <input type="text" class="form-control" name="ISBN">
      </div>

    <div class="mb-3">
      <label for="front" class="form-label">Portada</label>
      <input type="file" class="form-control" name="front">
    </div>

    <button type="submit" class="btn btn-primary">Crear</button>
  </form>
