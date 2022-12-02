<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {


            return Validator::make($data, [

                'name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'type_id' => ['required'],
                'nic' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        
    }



    // tipo de documento, número de documento, fecha de nacimiento, dirección de esidencia, teléfono.
    //3. Para un usuario la dirección y teléfono no son campos obligatorios.



    protected function create(array $data)
    {



        $users = DB::table('users')
            ->where('type_id', '=', $data['type_id'])
            ->where('nic', '=', $data['nic'])
            ->get();


        if ($users) {


            return User::create([


                'name' => $data['name'],
                'last_name' => $data['last_name'],
                'type_id' => $data['type_id'],
                'nic' => $data['nic'],
                'birth' => $data['birth'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
        return view('test');
    }
}
