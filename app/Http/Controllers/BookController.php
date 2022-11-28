<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

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
        return response()->json($bookCase);

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



        return view('books.edit'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $id)
    {
        $bookCase = Book::find($id);
        $bookCase->fill(request()->except(['image', '_token', '_method']));
        if($request->hasFile('image')){
            $bookCase->image =  request('image')->store('books', 'public') ;
        }
        $bookCase->save();
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
        return redirect('books')->with('message', 'El curso se ha borrado exitosamente' );


    }
}
