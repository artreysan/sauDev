@extends('layouts.app')

@section('titulo','Modificar Usuario')

@section('contenido')
    @include('layouts.navbar')
    <style>
        input:focus {
            border-color: rgb(32, 107, 80);
            box-shadow: 0 1px 1px rgb(32, 107, 80)inset, 0 0 8px rgb(32, 107, 80);
            outline: 0 none;
        }
    </style>
    <br>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header" name="datos_solicitante">
                    <h4>Información del usuario a registrar:</h4>
                </div>
            </div>
        </nav>
    </div>
    <br>

    <form action="/perfil/modificar/save" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-3"><strong>Nombre(s):</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" 
                            id="name" 
                            name="name" 
                            type="text" 
                            placeholder=" tu nombre " 
                            value="{{ auth()->user()->name }}" 
                            required />
                </div>
                <br>
                <br>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Apellido paterno:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" 
                            id="apellido_paterno" 
                            name="apellido_paterno" 
                            type="text" 
                            placeholder=" tu nombre " 
                            value="{{ auth()->user()->apellido_paterno}}" 
                            required />
                </div>
                <br>
                <br>
                @error('apellido_paterno')
                    <div class="alert alert-danger w-75 ">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Apellido materno:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" 
                            id="apellido_materno" 
                            name="apellido_materno" 
                            type="text" 
                            placeholder=" tu nombre " 
                            value="{{ auth()->user()->apellido_materno}}" 
                            required />

                </div>
                <br>
                <br>
                @error('apellido_materno')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="row">
                <div class="col-md-3"><strong>Función:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" 
                            id="funcion" 
                            name="funcion" 
                            type="text" 
                            placeholder=" tu nombre " 
                            value="{{ auth()->user()->funcion }}" 
                            required />
                </div>
                <br>
                <br>
                @error('apellido_materno')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="row">
                <div class="col-md-3"><strong>Email:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" 
                            id="email" 
                            name="email" 
                            type="text" 
                            placeholder=" tu nombre " 
                            value="{{ auth()->user()->email }}" 
                            required />
                </div>
                <br>
                

                    
                <br>
                @error('email')
                @enderror
            </div>
            <hr>
                <div class="row">
                <input type="submit" value="Actualizar" class="btn btn-primary btn-md active" />
        </div>
        <br>
        <br>
    </form>
@endsection

