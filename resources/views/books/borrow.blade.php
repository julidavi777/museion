<div class="container pb-3 ">


    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
    @if ($bookCase->on_stock == false)
        <div class="mb-3 visually-hidden">
            <input type="text" class="form-control" value="{{ isset($bookCase->title) ? $bookCase->title : old('title') }}" name="title">
            <input type="text" class="form-control" value="{{ isset($bookCase->author) ? $bookCase->author : old('author') }}" name="author">
            <input type="text" class="form-control" value="{{ isset($bookCase->pages) ? $bookCase->pages : old('pages') }}" name="pages">
            <input type="text" class="form-control" value="{{ isset($bookCase->ISBN) ? $bookCase->ISBN : old('ISBN') }}"  name="ISBN">
            <input type="text" class="form-control" value="{{ isset($bookCase->front) ? $bookCase->front : old('front') }}" name="front">
            <input type="text" class="form-control" value="true" name="on_stock">
        </div>
        <button type="submit" class="btn btn-warning"> Devolver libro</button>
        @else
        <div class="mb-3 visually-hidden">

            <input type="text" class="form-control" value="{{ isset($bookCase->title) ? $bookCase->title : old('title') }}" name="title">
            <input type="text" class="form-control" value="{{ isset($bookCase->author) ? $bookCase->author : old('author') }}" name="author">
            <input type="text" class="form-control" value="{{ isset($bookCase->pages) ? $bookCase->pages : old('pages') }}" name="pages">
            <input type="text" class="form-control" value="{{ isset($bookCase->ISBN) ? $bookCase->ISBN : old('ISBN') }}" name="ISBN">
            <input type="text" class="form-control" value="false" name="on_stock">
        </div>
        <button type="submit" class="btn btn-primary"> Prestar libro</button>
    @endif
</div>
<a class="btn btn-danger" href="{{ url('/books') }}">Regresar</a>

</div>
</form>
