<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Proyectogitlab;
use App\Models\Proyectoglpi;
use App\Models\Proyectojira;
use App\Models\Proyectos;
use App\Models\SistemaAplicaciones;
use App\Models\SistemaBaseDatosQa;
use App\Models\SistemaHerramientasDeAdministracion;
use App\Models\Sistemas;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function consulta(){
        $equipos= Equipo::where('idUsuario',auth()->user()->id)->get();
        $proyectos= Proyectos::where('idUsuario',auth()->user()->id)->get();
        $gitlab= Proyectogitlab::where('idUsuario',auth()->user()->id)->get();   
        $jira= Proyectojira::where('idUsuario',auth()->user()->id)->get();   
        $glpi= Proyectoglpi::where('idUsuario',auth()->user()->id)->get();   
        return view('users.consulta.consulta',compact('proyectos','equipos'),compact('gitlab','jira','glpi'),);
    }
    
    public function consultaPermisos($idEquipo){
        $sis = Sistemas::where('idEquipo',$idEquipo)->get();
        $dbs = SistemaBaseDatosQa::where('idEquipo',$idEquipo)->get();
        $apps = SistemaAplicaciones::where('idEquipo',$idEquipo)->get();
        $tools = SistemaHerramientasDeAdministracion::where('idEquipo',$idEquipo)->get();
        return view('users.consulta.permisos',compact('sis','dbs','apps','tools'));
    }

    
}
