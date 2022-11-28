
<h1>{{$mode.' '.$action}} libro</h1>
    <div class="mb-3">
        <label for="title"form-label">Titulo</label>
        <input type="text" class="form-control" value="{{isset( $bookCase->title)?$bookCase->title:''}}" name="title">
      </div>

      <div class="mb-3">
          <label for="author"form-label">Autor</label>
          <input type="text" class="form-control" value="{{isset( $bookCase->author)?$bookCase->author:''}}" name="author">
        </div>

        <div class="mb-3">
          <label for="pages"form-label">Número de páginas</label>
          <input type="text" class="form-control" value="{{isset( $bookCase->pages)?$bookCase->pages:''}}" name="pages">
        </div>

        <div class="mb-3">
          <label for="ISBN" form-label">ISBN</label>
          <input type="text" class="form-control" value="{{isset( $bookCase->ISBN)?$bookCase->ISBN:''}}" name="ISBN">
        </div>

      <div class="mb-3">
        <label for="front" class="form-label">Portada</label>
        @if(isset($bookCase->front))
        <img src="{{ asset('storage'.'/'.$bookCase->front)}}" alt="Portada del libro" width="90">
        @endif
        <input type="file" class="form-control"  name="front">
      </div>

<button type="submit" class="btn btn-primary">{{$mode}} libro</button>

    </form>
