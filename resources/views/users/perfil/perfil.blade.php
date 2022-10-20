@extends('layouts.app')

@section('titulo','Perfil')
<style>
    .dataUser{
        border-radius: 15px;
        background-color: #545454;
        color: white;
    }

</style>


@section('contenido')
    <br>
    <div class="row" >
        <div class="col-md-1 " ></div>
        <div class="col-md-5 alert" style="background-color: #ddd;">
            <p>Nombre: <span class="dataUser">
                &nbsp 
                    {{auth()->user()->name}} {{auth()->user()->apellido_paterno}} {{auth()->user()->apellido_materno}}
                &nbsp 
            </span>
            </p>
            <p>Puesto: 
                <span class="dataUser" style="">
                &nbsp 
                    {{auth()->user()->funcion}}
                &nbsp 
                </span>
            <p>Email:
                <span class="dataUser">
                &nbsp
                    {{auth()->user()->email}}
                &nbsp 
                </span>
            <p> Solicitudes realizadas:
                <span class="dataUser">
                &nbsp 
                     {{auth()->user()->solicitudes}}
                &nbsp 
                </span>
            </p>
        </div>
        <div class="col-md-1 " ></div>
        <div class="col-md-3" >
            <a href="{{ url('/perfil/modificar')}}">
                <button type="button" class="btn btn-primary">Modificar</button>
            </a>
            <br>
            <br>
            <a href="{{url('/muro')}}">
                <button type="button" class="btn btn-default"> Regresar</button>
            </a>
        </div>
        <div class="col-md-2"></div>
    </div>

@stop