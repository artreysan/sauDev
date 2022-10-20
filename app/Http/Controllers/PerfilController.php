<?php

namespace App\Http\Controllers;

use App\Models\User;
use Error;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class PerfilController extends Controller
{
    public function vistaPerfil(){
        return view('users.perfil.perfil');
    }
    public function vistaModificarPerfil(){
        $msj = [""];
        return view('users.perfil.modificar');
    }
    public function guardarPerfilActualizado(Request $request){
        
        if(User::where('email',$request->email)->exists()){
            $msj = ['Correo Existestente'];
            return view('users.perfil.modificar');
        }
        User::where('id', auth()->user()->id)->update([
           'name'=>$request->name,
           'apellido_paterno'=>$request->apellido_paterno,
           'apellido_materno'=>$request->apellido_materno,
           'funcion'=>$request->funcion,
           'email'=>$request->email
        ]);

        return redirect()->route('post.index');
    }
}
