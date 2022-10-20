<?php

namespace App\Http\Controllers;

use App\Http\Controllers\auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    
    }

    public function store(Request $request){
        
        $user = new User();
        $user->name= $request->name;
        $user->apellido_paterno= $request->apellido_paterno;
        $user->apellido_materno= $request->apellido_materno;
        $user->funcion = $request->funcion; 
        $user->email= $request->email;
        $user->password= Hash::make ($request->password);
        $user->admin= false;
        $user->solicitudes = 0;
        $user->ipFija = "";
        $user->internet= "";
        $user->vpn= "";
        $user->gitlab= "";
        $user->jira = "";
        $user->glpi= "";
        $user->save();

        auth()->attempt($request->only('email','password'));
        return redirect()->route('post.index');

    }
}







