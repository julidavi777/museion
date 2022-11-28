

    <div class="mb-3">
        <label for="title"form-label">Titulo</label>
        <input type="text" class="form-control" value="{{$bookCase->title}}" name="title">
      </div>

      <div class="mb-3">
          <label for="author"form-label">Autor</label>
          <input type="text" class="form-control" value="{{$bookCase->author}}" name="author">
        </div>

        <div class="mb-3">
          <label for="pages"form-label">Número de páginas</label>
          <input type="text" class="form-control" value="{{$bookCase->pages}}" name="pages">
        </div>

        <div class="mb-3">
          <label for="ISBN" form-label">ISBN</label>
          <input type="text" class="form-control" value="{{$bookCase->ISBN}}" name="ISBN">
        </div>

      <div class="mb-3">
        <label for="front" class="form-label">Portada</label>
        {{$bookCase->front}}
        <input type="file" class="form-control"  name="front">
      </div>

<button type="submit" class="btn btn-primary">Ingresar libro</button>

    </form>
