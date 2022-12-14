<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $endUser = User::all();
        return view('users.index', compact('endUser'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $endUser = request()->except('_token');
        $users = User::all();
        $typeId = $request->type_id;
        $nic = $request->nic;
        $query= DB::table('users')->where('type_id','=', $typeId)->where('nic','=',$nic)->get()->count() > 0;

        if (!$query) {
        User::insert($endUser);
        return redirect('users')->with('msg', 'Usuario añadido correctamente');
        }else{
             return redirect('users/create')->with('alert', 'Error! número y tipo de documento iguales');

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $endUser = User::findOrFail($id);
        return view('users.edit', compact('endUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $formFields =[
            'name' =>'required|string|max:80',
            'last_name'=>'required|string|max:80',
            'type_id'=>'required|in:Cédula de ciudadanía,Tarjeta de identidad, pasaporte',
            'nic'=>'required',
            'birth'=>'required|date|',
            'email'=>'required|string|',

        ];

        $error = [
            'name.required'=>'El Nombre es requerido, no debe contener mas de 80 caracteres',
            'last_name.required'=>'El Apellido es requerido, no debe ser mayor a 80 caracteres',
            'nic.required'=>'El número de indentidad  es requerido y no  puede estar duplicado',
            'birht.required'=>'Por favor ingrese una fecha valida',
            'email.required'=>'Email invalido ',
        ];

        $this->validate($request, $formFields,$error);
        $user =request()->except(['_token', '_method']);


        User::where('id', '=', $id)->update($user);
        $endUser = User::findOrFail($id);
        return redirect('users')->with('msg', 'El usuario se ha editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            User::destroy($id);

        return redirect('users')->with('msg', 'El usuario se ha borrado exitosamente' );
    }
}
