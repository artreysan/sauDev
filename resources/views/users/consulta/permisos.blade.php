@extends('layouts.app')

@section('titulo','Permisos de Equipo')

@section('contenido')
      <br>
      <h3>Permisos en equipo</h3>
      @foreach ($sis as $si)
         <table class="table">
            <tr>
               <th>Cedula Asignada</th>
               <th>Rol</th>
               <th>Nombre</th>
               <th>Cuenta Directorio Activo</th>
               <th>Nombre Completo Sistema</th>
               <th>Nombre Corto Sistema</th>
               <th>IP Origen</th>
            </tr>
            <tr>
               <td>{{$si->id}}</td>
               <td>Rol</td>
               <td>{{auth()->user()->nombre}} {{auth()->user()->apellido_paterno}} {{auth()->user()->apellido_materno}}</td>
               <td>{{$si->cuentaDirectorioActivo}}</td>
               <td>{{$si->nombreCompletoSistema}}</td>
               <td>{{$si->nombreCortoSistema}}</td>
               <td>{{$si->ipOrigen}}</td>
            </tr>
         </table>
      @endforeach

      <h4>Base de Datos QA. Desarrollo</h4>
      @if (count($apps) > 0)
         @foreach ($apps as $app)
            <table class="table">
               <tr>
                  <th>Aplicación</th>
                  <th>IP Fija</th>
                  <th>Puerto</th>
               </tr>
               <tr>
                  <td>{{$app->aplicacion}}</td>
                  <td>{{$app->ipFija}}</td>
                  <td>{{$app->puerto}}</td>
               </tr>
            </table>
         @endforeach
      @else
         <div class="alert alert-danger">Sin permisos a las Base de Datos QA. Desarrollo</div>
      @endif
      <h4>Aplicaciones</h4>
      @if (count($dbs) > 0)
         @foreach ($dbs as $db)
            <table class="table">
               <tr>
                  <th>BD</th>
                  <th>IP Destino</th>
                  <th>Puerto</th>
               </tr>
               <tr>
                  <td>{{$db->aplicacion}}</td>
                  <td>{{$db->ipFija}}</td>
                  <td>{{$db->puerto}}</td>
               </tr>
            </table>
         @endforeach  
      @else
         <div class="alert alert-danger">Sin permisos a las Aplicaciones</div>
      @endif
      
      <h4>Herramientas de Administración</h4>
      @if (count($tools)>0)
         @foreach ($tools as $tool)
            <table class="table">
               <tr>
                  <th>CACHE</th>
                  <th>OPENSHIFT</th>
                  <th>PENTAHO</th>
                  <th>OWNCLOUD</th>
                  <th>MATOMO</th>
                  <th>PLONE</th>
               </tr>
               <tr>
                  <td>{{$tool->cache}}</td>
                  <td>{{$tool->openshift}}</td>
                  <td>{{$tool->pentaho}}</td>
                  <td>{{$tool->owncloud}}</td>
                  <td>{{$tool->matomo}}</td>
                  <td>{{$tool->plone}}</td>
               </tr>
            </table>
         @endforeach   
      @else
         <div class="alert alert-danger">Sin permisos a las Herramientas de Administración</div>
      @endif
      
      <div class="container">
         <div class="row">
            <div class="col-md-2">
                <a href="{{ url('/consulta') }}">
                    <button class="btn btn-default " type="button">
                        Regresar
                    </button>
                </a>
            </div>
         </div>
      </div>
    <br>
    <br>
@stop

