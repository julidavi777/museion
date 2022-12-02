<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
//allow delete files in storage
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookCase = Book::all();
        return view('books.index', compact('bookCase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $isbn =  DB::table('books')->where('ISBN', '=', $request->ISBN)->get()->count() > 0;

        $formFields =[
            'title' =>'required|string|max:80',
            'author'=>'required|string|max:80',
            'pages'=>'required|int|min:5|max:1000',
            'ISBN'=>'required|string|max:13|min:13',
            'front'=>'required|max:8000|mimes:jpg,png,jpeg,webp',
        ];

        $error = [
            'title.required'=>'El Título es requerido, no debe contener mas de 80 caracteres',
            'author.required'=>'El Autor es requerido, su nombre no debe ser mayor a 80 caracteres',
            'pages.required'=>'El número de paginas son requeridas, debe estar en un rango de 5 y 1000',
            'ISBN.required'=>'El ISBN es requerido, debe tener 13 carácteres',
            'front.required'=>'La portada es requerida, no debe ser superior a 8Mb',
            'ISBN.unique' => 'El ISBN no puede estar repetido'
        ];

        $this->validate($request,$formFields,$error);
        $bookCase =  request()->except('_token');

        if($request->hasFile('front')){
            $bookCase['front']= $request->file('front')->store('uploads', 'public');
        }
        if(!$isbn){
             Book::insert($bookCase);
             return redirect('books')->with('msg', 'Libro añadido correctamente');
            }

            return redirect('books/isbn');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookCase = Book::findOrFail($id);

        return view('books.show', compact('bookCase'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $bookCase = Book::findOrFail($id);

        return view('books.edit', compact('bookCase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $formFields =[
            'title' =>'required|string|max:80',
            'author'=>'required|string|max:80',
            'pages'=>'required|int|min:5|max:10000',
            'ISBN'=>'required|string|max:13|min:13',
        ];

        $error = [
            'title.required'=>'El Título es requerido, no debe contener mas de 80 caracteres',
            'author.required'=>'El Autor es requerido, su nombre no debe ser mayor a 80 caracteres',
            'pages.required'=>'El número de paginas son requeridas, debe estar en un rango de 5 y 1000',
            'ISBN.required'=>'El ISBN es requerido, debe tener 13 carácteres',
            'ISBN.unique'=>'Este ISBN ya se encuentra registrado, por favor ingrese otro',
            'front.required'=>'La portada es requerida, no debe ser superior a 8Mb',
        ];

        $this->validate($request, $formFields,$error);
        $book =request()->except(['_token', '_method']);

        if($request->hasFile('front')){
            $formFields =[ 'front'=>'required|max:8000|mimes:jpg,png,jpeg,webp',];
            $error = ['required'=> 'La portada es requerida'];

            $bookCase = Book::findOrFail($id);
            Storage::delete(['public/', $bookCase->front]);
            $book['front']= $request->file('front')->store('uploads', 'public');
        }

        Book::where('id', '=', $id)->update($book);
        $bookCase = Book::findOrFail($id);
        return redirect('books')->with('msg', 'El libro se ha editado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bookCase = Book::find($id);

        if(!$bookCase->on_stock){
            return view('books.delete');
        }
        if(Storage::delete('public/'. $bookCase->front)){
            Book::destroy($id);
        }
        return redirect('books')->with('msg', 'El libro se ha borrado exitosamente' );


    }
}
