@extends('layouts.app')

@section('titulo','Consulta')

@section('contenido')
    @include('layouts.navbar')
    <br>
    <br>

    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header" name="datos_solicitante">
                    <h4>Información del usuario:</h4>
                </div>
            </div>
        </nav>
        <br>
        <div class="row">
            <div class="col-md-3"><strong>Nombre(s):</strong></div>
            <div class="col-md-3">
                <p>{{ auth()->user()->name }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><strong>Apellido paterno:</strong></div>
            <div class="col-md-3">
                <p>{{ auth()->user()->apellido_paterno }}</p>
            </div>
            <div class="col-md-3"><strong>Apellido materno:</strong></div>
            <div class="col-md-3">
                <p>{{ auth()->user()->apellido_materno }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><strong>Correo electronico:</strong></div>
            <div class="col-md-3">
                <p>{{ auth()->user()->email }}</p>
            </div>
        </div>
        <br>

        <br>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header" name="datos_solicitante">
                    <h4>Servicios permitidos:</h4>
                </div>
            </div>
        </nav>
        <br>

        <h4>Proyectos</h4>
        
        @if (auth()->user()->gitlab == '' && auth()->user()->jira == '' && auth()->user()->glpi == '')
            <div class="alert alert-danger">
                Sin acceso a proyectos.
            </div>
        @else

        <div class="row">

        @foreach ($proyectos as $p)
            <table class="table text-center">
                <tr>
                    <td><b>Célula Asignada</b></td>
                    <td><b>Rol</b></td>
                    <td><b>Nombre</b></td>
                    <td><b>Nombre Completo Sistema</b></td>
                    <td><b>Nombre Corto Sistema</b></td>
                </tr>
                <tr>
                    <td>{{$p->id}}</td>
                    <td>Rol</td>
                    <td>{{auth()->user()->nombre}} {{auth()->user()->apellido_paterno}} {{auth()->user()->apellido_materno}}</td>
                    <td>{{$p->nombreCompletoSistema}}</td>
                    <td>{{$p->nombreCortoSistema}}</td>
                </tr>
            </table>
        @endforeach
<!-- ################ GITLAB ################ -->
                @if (auth()->user()->gitlab != '')
                    <div class="col-md-3"><strong>GitLab:</strong></div>
                    <div class="container">
                        @foreach ($gitlab as $g)
                            <table class="table text-center">
                                <tr>
                                    <td><b>Proyecto</b></td>
                                    <td><b>Coordinador</b></td>
                                    <td><b>Nivel de Acceso</b></td>
                                </tr>
                                <tr>
                                    <td>{{ $g->proyecto }}</td>
                                    <td>{{ $g->coordinador }}</td>
                                    <td>{{ $g->nivelDeAcceso }}</td>
                                </tr>
                            </table>
                        @endforeach
                    </div>
                @endif
<!-- ################ JIRA ################ -->
                <br>
                @if (auth()->user()->jira != '')
                    <div class="col-md-3"><strong>JIRA:</strong></div>
                    <div class="container">
                        @foreach ($jira as $j)
                            <table class="table text-center">
                                <tr>
                                    <td><b>Proyecto</b></td>
                                    <td><b>Coordinador</b></td>
                                    <td><b>Nivel de Acceso</b></td>
                                </tr>
                                <tr>
                                    <td>{{ $j->proyecto }}</td>
                                    <td>{{ $j->coordinador }}</td>
                                    <td>{{ $j->nivelDeAcceso }}</td>
                                </tr>
                            </table>
                        @endforeach
                    </div>
                @endif
                <br>

<!-- ################ GLPI ################ -->
                @if (auth()->user()->glpi != '')
                    <div class="col-md-3">
                        <strong>GLPI:</strong>
                    </div>
                    <div class="container">
                        @foreach ($glpi as $gl)
                            <table class="table text-center">
                                <tr>
                                    <td>Proyecto</td>
                                    <td>Coordinador</td>
                                    <td>Nivel de Acceso</td>
                                </tr>
                                <tr>
                                    <td>{{ $gl->proyecto }}</td>
                                    <td>{{ $gl->coordinador }}</td>
                                    <td>{{ $gl->nivelDeAcceso }}</td>
                                </tr>
                            </table>
                        @endforeach
                    </div>
                @endif
            </div>
        @endif
<!-- ################ Equipo ################ -->
        <h4>Servicios TIC</h4>
        @if (count($equipos)>0)
            <div class="container">
                <table class="table table-striped">
                    <tr>
                        <th>Tipo de equipo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Serie</th>
                        <th>MAC Ethernet</th>
                        <th>MAC WiFi</th>
                        <th>Accesos</th>
                    </tr>
                    @foreach ($equipos as $e)
                        <tr>
                            <td>{{ $e->tipoDeEquipo }}</td>
                            <td>{{ $e->tipoDeEquipo }}</td>
                            <td>{{ $e->marca }}</td>
                            <td>{{ $e->modelo }}</td>
                            <td>{{ $e->macEthernet }}</td>
                            <td>{{ $e->macWiFi }}</td>
                            <td>
                                <a href="{{ url('/consulta/' . $e->id) }}">
                                    <span data-toggle="modal" data-target="#foo" class="glyphicon glyphicon-tasks">
                                    </span>
                                </a>
                            </td>
                            
                        </tr>
                    @endforeach
                </table>
            </div>        
        @else
            <div class="alert alert-danger">
                Sin acceso a servicios.
            </div>
        @endif
    </div>

<!-- ################ Boton de Retorno ################ -->

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="{{ url('/muro') }}">
                    <button class="btn btn-default " type="button">
                        Regresar
                    </button>
                </a>
            </div>
        </div>
    </div>
    
    <br>
    <br>

@endsection
