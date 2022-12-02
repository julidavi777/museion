@include('layouts.app')
@section('content')

    <form  action="{{ url('/users/'.$endUser->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('users.form',['mode'=>'Editar', 'action'=>''])
    </form>

