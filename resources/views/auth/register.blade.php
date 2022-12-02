@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <h2>{{ __('Registrate en Museion') }}</h2>
                    </div>

                    <div class="card-body bg-">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            {{-- NOmbre --}}
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nombre:*') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ __('123456') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- Apellido --}}
                            <div class="row mb-3">
                                <label for="last_name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Apellido:*') }}</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text"
                                        class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                        value="{{ __('123456') }}" required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- tipo de documento --}}
                            <div class="row mb-3">
                                <label for="type_id"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Tipo de documento:*') }}</label>

                                <div class="col-md-6">
                                    <select class="form-select" aria-label="Default select example" name="type_id"
                                        @error('type_id') is-invalid @enderror" name="type_id" value="{{ __('123456') }}"
                                        required autocomplete="type_id" autofocus>
                                        {{-- <option selected>-- Selecciona uno --</option> --}}
                                        <option value="Cédula de ciudadanía ">Cédula de ciudadanía </option>
                                        <option value="'Tarjeta de identidad">Tarjeta de identidad</option>
                                        <option value="pasaporte">pasaporte</option>
                                    </select>

                                    @error('type_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- nic --}}
                            <div class="row mb-3">
                                <label for="nic"class="col-md-4 col-form-label text-md-end">Documento: </label>

                                <div class="col-md-6">
                                    <input id="nic" type="nic"
                                        class="form-control @error('nic') is-invalid @enderror" name="nic"
                                        value="{{ __('152') }}" required autocomplete="nic">

                                    @error('nic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- nacimiento --}}
                            <div class="row mb-3">
                                <label for="birth"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Fecha de nacimiento:*') }}</label>

                                <div class="col-md-6">
                                    <input id="birth" type="date"
                                        class="form-control @error('birth') is-invalid @enderror" name="birth"
                                        value="{{ __('2022-12-01') }}" required autocomplete="birth">

                                    @error('birth')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- dirección --}}
                            <div class="row mb-3">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Dirección:') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ __('123456') }}"  autocomplete="address">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Phone --}}
                            <div class="row mb-3">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Celular:') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="number"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ __('123456') }}"  autocomplete="phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- direccion de email --}}
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico:*') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ __('123456@isb.com') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                                {{-- password --}}
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" value="12345678">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- password_confirmation --}}
                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" value="12345678" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
