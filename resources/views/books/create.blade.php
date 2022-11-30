@extends('layouts.app')
@section('content')

<form action="{{url('/books')}}" method="post" enctype="multipart/form-data">
    @csrf

@include('books.form', ['mode'=>'Añadir', 'action'=>'nuevo'])

@endsection
