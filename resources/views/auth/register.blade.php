@extends('layouts.app')

@section('titulo')

<?php
class direccion {
    public $ubicacion;
}

$ubicacion1 = new direccion;
$ubicacion1->ubicacion = "Av. Insurgentes Sur 1089, Col. Nochebuena, Benito Juárez, 3720, CDMX. Piso 8";

$ubicacion2 = new direccion;
$ubicacion2->ubicacion = "Av. Insurgentes Sur 1089, Col. Nochebuena, Benito Juárez, 3720, CDMX. Piso 9";

class empresa {
    public $nombre;
    public $contrato;
}

$empresa1 = new empresa;
$empresa1->nombre = "Patito S.A. de C.V";
$empresa1->contrato = "MVC-4589";

$empresa2 = new empresa;
$empresa2->nombre = "Electronica Sacachispas S.A de C.V";
$empresa2->contrato = "BBC-3789";
?>

 
@endsection

@section('contenido')
    <style>
        input:focus {
            border-color: rgb(32, 107, 80);
            box-shadow: 0 1px 1px rgb(32, 107, 80)inset, 0 0 8px rgb(32, 107, 80);
            outline: 0 none;
        }
    </style>
    <br>
    <br>
    <br>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header" name="datos_solicitante">
                    <h4>Información del usuario a registrar:</h4>
                </div>
            </div>
        </nav>
        <hr class="red">
    </div>

    <form action="/crear" method="POST">
        @csrf
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-md-3"><strong>Nombre(s):</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="name" name="name" type="text"
                        placeholder=" Tu nombre " value="{{ old('name') }}" required/>
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
                    <input class="border-success" id="apellido_paterno" name="apellido_paterno" type="text"
                        placeholder=" Tu apellido paterno " value="{{ old('apellido_paterno') }}" required/>
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
                    <input class="border border-success" id="apellido_materno" name="apellido_materno" type="text"
                        placeholder=" Tu apellido materno " value="{{ old('apellido_materno') }}" required/>
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
                    <input class="border border-success" id="funcion" name="funcion" type="text"
                        placeholder=" Puesto o Cargo "  required/>
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
                    <input class="border border-success" id="email" name="email" type="email"
                        placeholder=" nombre@ejemplo.com " value="{{ old('email') }}" required/>
                </div>
                <br>
                <br>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3"><strong>Contraseña:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="password" name="password" type="password"
                        placeholder=" Contraseña " required/>
                </div>
                <br>
                <br>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-3"><strong>Repite tu contraseña:</strong></div>
                <div class="col-md-3">
                    <input class="border border-success" id="password_confirmation" name="password_confirmation"
                        type="password" placeholder=" Repite tu contraseña " required/>
                </div>
                <br>
                <br>
                @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <input type="submit" value="Crear cuenta" class="btn btn-primary btn-md active" />
        </div>
        <br>
        <br>
    </form>
@endsection
