@extends('layouts.app')
@section('content')
    <div class="container">

        @if (Session::has('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">

                <strong> {{ Session::get('msg') }}</strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::has('alert'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">

            <strong> {{ Session::get('alert') }}</strong>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

<a class="btn btn-success mb-3" href="{{url('/users/create')}}">Añadir usuario</a>
        <div class="table-responsive rounded ">
            <table class="table table-dark table-striped ">
                <thead>
                    <tr>

                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Tipo de documento</th>
                        <th scope="col"># documento</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">direccion</th>
                        <th scope="col">telefono</th>
                        <th scope="col">Correo electronico</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach ($endUser as $user)
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->type_id }}</td>
                        <td>{{ $user->nic }}</td>
                        <td>{{ $user->birth }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->email }}</td>


                        <td class="">

                            <a class=" mb-3 btn btn-warning" href="{{ url('/users/' . $user->id . '/edit') }}">Editar</a>
                            <form action="{{ url('/users/' . $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class=" btn btn-danger" type="submit" value="Eliminar">
                            </form>
                        </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
