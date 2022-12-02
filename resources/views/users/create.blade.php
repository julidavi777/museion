@extends('layouts.app')
@section('content')

<form action="{{url('/users')}}" method="post" enctype="multipart/form-data">
    @csrf

@include('users.form', ['mode'=>'Añadir', 'action'=>'nuevo'])

@endsection
