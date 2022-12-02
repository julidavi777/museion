<div class="container pb-3 ">
    <h1>{{ $mode . ' ' . $action }} Usuario</h1>

    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
    {{isset( $bookCase->title)?$bookCase->title:old('title')}}
    {{-- Nombre --}}
    <div class="mb-3">
        <label for="name"form-label">Nombre</label>
        <input type="text" class="form-control" value="{{isset($endUser->name) ? $endUser->name : old('name') }}"
            name="name">
        </div>


    {{-- apellido --}}

    <div class="mb-3">
        <label for="last_name"form-label">Apellido</label>
        <input type="text" class="form-control"
            value="{{ isset($endUser->last_name) ? $endUser->last_name : old('last_name') }}" name="last_name">
    </div>

    {{-- tipo de documento --}}
    <div class="mb-3">
        <label for="type_id"form-label">Tipo de documento</label>
        <select class="form-select" aria-label="Default select example" name="type_id"
            @error('type_id') is-invalid @enderror" name="type_id" value="{{ __('seleccione 1') }}" required
            autocomplete="type_id" autofocus>
            <option selected>-- Selecciona uno --</option>
            <option value=" Cédula de ciudadanía">Cédula de ciudadanía </option>
            <option value="Tarjeta de identidad">Tarjeta de identidad</option>
            <option value="pasaporte">pasaporte</option>
        </select>

        @error('type_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- nic --}}
    <div class="mb-3">
        <label for="nic"class="">Documento </label>

        <input id="nic" type="nic" class="form-control @error('nic') is-invalid @enderror" name="nic"
            value="{{isset( $endUser->nic)?$endUser->nic:old('nic')}}" required autocomplete="nic">

        @error('nic')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- birth --}}
    <div class="mb-3">
        <label for="birth" class="">{{ __('Fecha de nacimiento:*') }}</label>

        <input id="birth" type="date" class="form-control @error('birth') is-invalid @enderror" name="birth"
            value="{{isset( $endUser->birth)?$endUser->birth:old('birth')}} __('2022-12-01') }}" required autocomplete="birth">

        @error('birth')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    {{-- direccion --}}
    <div class="mb-3">
        <label for="address" class="">{{ __('Dirección:') }}</label>


        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"
             value="{{--{{isset( $endUser->address)?$endUser->address:old('address')}}--}} la concha" autocomplete="address">

        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
          {{-- direccion de email --}}
          <div class="mb-3">
            <label for="email"
                class="">Correo electrónico</label>

            <div class="">
                <input id="email" type="email"
                    class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{isset( $endUser->email)?$endUser->email:old('email')}}" required autocomplete="email">


            </div>

    {{-- password --}}
    <div class="mb-3">
        <label for="password" class="">{{ __('Password') }}</label>

        <div class="">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password" value="123456789">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

   
<button type="submit" class="btn btn-primary">{{$mode}} </button>
<a class="btn btn-danger"  href="{{url('/users')}}">Regresar</a>
</form>
