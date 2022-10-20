@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
    <h1>Solicitud  envia</h1>
    <p>Su solicitud fue envida satisfactoriamente 
        {{ $solicitud->nombre}} 
        {{ $solicitud->apellido_materno}} 
        {{ $solicitud->apellido_paterno}}
        a
        {{ $solicitud->autorizador}}, {{$solicitud->puesto}}
    </p>
    <h3>Permisos requeridos:</h3>
    <p>
                <ul>
                    @if($solicitud->dir_activo =='si')  
                    <li>
                        <span class="c9">Usuario directorio Activo</span>
                    </li>
                    @endif
                    @if($solicitud->ip_fija=='si')  
                    <li>
                        <span>Ip Fija</span>
                    </li>
                    @endif
                    @if($solicitud->internet =='si')  
                    <li>
                        <span>Internet</span>
                    </li>
                    @endif
                    @if($solicitud->ip_fija=='si')  
                    <li>
                        <span>
                            Permisos a los Sistemas:
                        </span>
                        <ul>
                            <li>
                                <span>
                                    (Nombre del sistema y nivel de permisos)
                                </span>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            @endif
            <p class="c22 c8"><span class="c0"></span></p>
        </td>
    </p>
       
@endsection