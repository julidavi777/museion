<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
//allow delete files in storage
use Illuminate\Support\Facades\Storage;


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
        $bookCase =  request()->except('_token');

        if($request->hasFile('front')){
            $bookCase['front']= $request->file('front')->store('uploads', 'public');
        }
        Book::insert($bookCase);
        return redirect('books')->with('msg', 'Libro añadido correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $id)
    {

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
        $book =request()->except(['_token', '_method']);

        if($request->hasFile('front')){
            $bookCase = Book::findOrFail($id);
            Storage::delete(['public/', $bookCase->front]);
            $book['front']= $request->file('front')->store('uploads', 'public');
        }

        Book::where('id', '=', $id)->update($book);
        $bookCase = Book::findOrFail($id);
       return view('books.edit', compact('bookCase') );
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

        if(Storage::delete('public/'. $bookCase->front)){
            Book::destroy($id);
        }
        return redirect('books')->with('msg', 'El libro se ha borrado exitosamente' );


    }
}
