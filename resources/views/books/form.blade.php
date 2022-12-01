

<div class="container pb-3 ">
    <h1>{{$mode.' '.$action}} libro</h1>

@if(count($errors)>0)
    @foreach ($errors->all() as $error )
    <div class="alert alert-danger">
        {{$error}}
    </div>

    @endforeach
@endif
    <div class="mb-3">
        <label for="title"form-label">Titulo</label>
        <input type="text" class="form-control" value="{{isset( $bookCase->title)?$bookCase->title:old('title')}}" name="title">
    </div>

    <div class="mb-3">
        <label for="author"form-label">Autor</label>
        <input type="text" class="form-control" value="{{isset( $bookCase->author)?$bookCase->author:old('author')}}" name="author">
    </div>

    <div class="mb-3">
        <label for="pages"form-label">Número de páginas</label>
        <input type="text" class="form-control" value="{{isset( $bookCase->pages)?$bookCase->pages:old('pages')}}" name="pages">
        </div>

        <div class="mb-3">
            <label for="ISBN" form-label">ISBN</label>
            <input type="text" class="form-control" value="{{isset( $bookCase->ISBN)?$bookCase->ISBN:old('ISBN')}}" name="ISBN">
        </div>



        <div class="mb-3">
            <label for="front" class="form-label"></label>
            @if(isset($bookCase->front))
            <img class="img-thumbnail img-fluid mb-3" src="{{ asset('storage'.'/'.$bookCase->front)}}" alt="Portada del libro" width="90">
            @endif
            <input type="file" class="form-control"  name="front">
        </div>

        <div class="mb-3 visually-hidden">
        <input type="text" class="form-control" value="true" name="on_stock">
        </div>

        <button type="submit" class="btn btn-primary">{{$mode}} libro</button>
        <a class="btn btn-danger"  href="{{url('/books')}}">Regresar</a>

    </div>
    </form>



