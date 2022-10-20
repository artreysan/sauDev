@extends('layouts.app')

@section('titulo')
@endsection
<?php

class autorizador {
    public $nombre;
    public $puesto;
}

$autorizador1 = new autorizador;
$autorizador1->nombre = "Ing. Mario César Herrera González";
$autorizador1->puesto = "Director Coordinador de Innovación y Desarrollo Tecnológico";

$autorizador2 = new autorizador;
$autorizador2->nombre = "Ing. José Antonio Rulfo Zaragoza";
$autorizador2->puesto = "Director de Desarrollo Tecnológico";

$autorizador3 = new autorizador;
$autorizador3->nombre = "Mtra. Edna Patricia Santiago Vargas";
$autorizador3->puesto = "Subdirectora de Sistemas Administrativos";

$autorizador4 = new autorizador;
$autorizador4->nombre = "Ing. David de León Muñoz";
$autorizador4->puesto = "Subdirector de Innovación Tecnológica";

$autorizador5 = new autorizador;
$autorizador5->nombre = "Ing. Iracema Mirón Ramírez";
$autorizador5->puesto = "Subdirectora de Adminsitración de Portales";

class direccion {
    public $ubicacion1;
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
$empresa1->nombre = "Electronica Sacachispas S.A de C.V";
$empresa1->contrato = "BBC-3789";

$empresa2 = new empresa;
$empresa2->nombre = "Patito S.A. de C.V";
$empresa2->contrato = "MVC-4589";

class equipo {
    public $tipo;
}

$equipo1 = new equipo;
$equipo1->tipo = "All In One";

$equipo2 = new equipo;
$equipo2->tipo = "Pc";

$equipo3 = new equipo;
?>

@section('contenido')

@include('layouts.navbar')
<br>
<br>
<br>
<form action="/solicitud/save" method="POST">
    @csrf
	<br>
	<br>
		<div class="container">
		<h4>SOLICITUD DE ALTA SERVICIOS INTERNOS DE TICS USUARIOS EXTERNOS EN EL SIGTIC.</h4>
		<h5>Ciudad de México a <?php echo date("j-m-Y"); ?> </h5>
		<br>
		<hr class="red">
	    </div>

	<!--Autorizadores-->
		<div class="container">
			<nav class="navbar navbar-default">
				<div cliass="container-fluid">
					<div class="navbar-header" name="datos_solicitante">
						<h3>Autorizadores de la solicitud</h3>
					</div>
				</div>
			</nav>
			<br>
			<div class="row">
				<div class="col-md-4"><strong>Nombre del director o subdiector:</strong></div>
				<div class="col-md-8">
					<select name="autorizador" id="auto_id" required>
						<option value="{{$autorizador1->nombre}}">{{$autorizador1->nombre}}</option>
						<option value="{{$autorizador2->nombre}}">{{$autorizador2->nombre}}</option>
						<option value="{{$autorizador3->nombre}}">{{$autorizador3->nombre}}</option>
						<option value="{{$autorizador4->nombre}}">{{$autorizador4->nombre}}</option>
						<option value="{{$autorizador5->nombre}}">{{$autorizador5->nombre}}</option>
					</select>
				</div>
			</div>
			<br>
	</div>
	<br>
	<!--Información del usuario a registrar-->
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header" name="datos_solicitante">
					<h4>Información del usuario a registrar:</h4>
				</div>
			</div>
		</nav>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Nombre(s):</strong></div>
			<div class="col-md-3">
				<p>{{auth()->user()->name}}</p>	
			</div>
			<div class="col-md-3"><strong>Apellido paterno:</strong></div>
			<div class="col-md-3">
				<p>{{auth()->user()->apellido_paterno}}</p>	
			</div>
			<div class="col-md-3"><strong>Apellido materno:</strong></div>
			<div class="col-md-3">
				<p>{{auth()->user()->apellido_materno}}</p>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"><strong>Función:</strong></div>
			<div class="col-md-3">
				<p>{{auth()->user()->funcion}}</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"><strong>Correo electronico:</strong></div>
			<div class="col-md-3">
				<p>{{auth()->user()->email}}</p>	
			</div>

		</div>

		<br>
		<div class="row">
			<div class="col-md-3"><strong>Ubicación en la SICT:</strong></div>
			<div class="col-md-3">
				<select name="direccion" id="direccion" required>
					<option value="{{$ubicacion1->ubicacion}}"> {{$ubicacion1->ubicacion}}</option>
					<option value="{{$ubicacion2->ubicacion}}"> {{$ubicacion2->ubicacion}}</option>
				</select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Contrato</strong></div>
			<div class="col-md-3">
				<select name="contrato" id="contrato" required>
					<option value="{{$empresa1->contrato}}">{{$empresa1->contrato}}</option>
					<option value="{{$empresa2->contrato}}">{{$empresa2->contrato}}</option>
				</select>
			</div><br>
		</div>
		<br>
		<br>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header" name="datos_solicitante">
					<h4>Servicios requeridos:</h4>
				</div>
			</div>
		</nav>
		<br>
		
		<h4>Servicios TIC</h4>
		<div class="row">
		@if (auth()->user()->vpn == "")
			<div class="col-md-3"><strong>VPN:</strong></div>
			<div class="col-sm-1"><input type="radio" name="vpn" value="si" checked> Sí</div>
			<div class="col-sm-1"><input type="radio" name="vpn" value="no"> No</div>
			<br>
			<br>
		@endif
		<!-- anañdir condicion de ip fija -->
			<div class="col-md-3"><strong>IP Fija:</strong></div>
			<div class="col-sm-1"><input type="radio" name="ip_fija" value="si" checked> Sí</div>
			<div class="col-sm-1"><input type="radio" name="ip_fija" value="no"> No</div>
			<br>
			<br>
		@if (auth()->user()->internet == "")
			<div class="col-md-3"><strong>Internet:</strong></div>
			<div class="col-sm-1"><input type="radio" name="internet" value="si" checked> Sí</div>
			<div class="col-sm-1"><input type="radio" name="internet" value="no"> No</div>
			<br>
			<br>
		@endif
		</div>
		<br>

		<h4>Proyectos</h4>
		@if (auth()->user()->gitlab == "")
		<div class="row">
			<div class="col-md-3"><strong>GitLab:</strong></div>
			<div class="col-sm-1"><input type="radio" name="gitlab" value="si" checked> Sí</div>
			<div class="col-sm-1"><input type="radio" name="gitlab" value="no"> No</div>
			<br>
			<br>
		@endif
		@if (auth()->user()->jira == "")
			<div class="col-md-3"><strong>JIRA:</strong></div>
			<div class="col-sm-1"><input type="radio" name="jira" value="si" checked> Sí</div>
			<div class="col-sm-1"><input type="radio" name="jira" value="no"> No</div>
			<br>
			<br>
		@endif
		@if (auth()->user()->glpi == "")
			<div class="col-md-3"><strong>GLPI:</strong></div>
			<div class="col-sm-1"><input type="radio" name="glpi" value="si" checked> Sí</div>
			<div class="col-sm-1"><input type="radio" name="glpi" value="no"> No</div>
			<br>
			<br>
		@endif
		</div>
		</div>
		</div>
		<br>
		<br>
	</div>
	<!--Fin del bloeque de información del usuario a registrar-->


	<!--Información del equipo-->
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header" name="datos_solicitante">
					<h4>Información del equipo a asignar y/o registrar:</h4>
				</div>
			</div>
		</nav>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Tipo del equipo:</strong></div>
			<div class="col-md-2">
				<select name="tipo_equipo" id="tipo_equipo" required>
					<option value="{{$equipo1->tipo}}"> {{$equipo1->tipo}}</option>
					<option value="{{$equipo2->tipo}}"> {{$equipo2->tipo}}</option>
					<option value="{{$equipo3->tipo}}"> {{$equipo3->tipo}}</option>
				</select>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Marca:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="marca"
					name="marca"
					type="text"
					placeholder=" Marca "
					value="{{old ('marca')}}"
					required
				/>
			</div>
			<div class="col-md-3"><strong>Modelo:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="modelo"
					name="modelo"
					type="text"
					placeholder=" Modelo "
					value="{{old ('modelo')}}"
					required
				/>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-3"><strong>Serie:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="serie"
					name="serie"
					type="text"
					placeholder=" Serie "
					value="{{old ('modelo')}}"
					required
				/>
			</div>
			<div class="col-md-3"><strong>MAC:</strong></div>
			<div class="col-md-3">
				<input
					class="border-success"
					id="mac"
					name="mac"
					type="text"
					placeholder=" MAC "
					value="{{old ('mac')}}"
					required
				/>
			</div>
		</div>
		<br>
		@if (auth()->user()->ipFija != "")
		<div class="row">
			<div class="col-md-3"><strong>IP Antigua:</strong></div>
			<div class="col-md-3">
				<input
					type="text" 
					minlength="7" 
					maxlength="15" 
					size="15" 
					pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$"
					class="border-success"
					id="ip_antigua"
					name="ip_antigua"
					placeholder=" IP Antigua "
					value="{{old ('ip_antigua')}}"
					required
				/>
			</div>
		</div>
		<br>
		@endif
		<div class="row">
			<div class="col-md-3"><strong>Propiedad de la SICT: </strong></div>
			<div class="col-sm-1"><input type="radio" name="equipo_sict" value="si"> Sí</div>
			<div class="col-sm-1"><input type="radio" name="equipo_sict" value="no" checked> No</div>
		<br>
		
			<br>
			<div class="col-md-3"><strong>Nombre del propietario: </strong></div>
			<div class="col-md-3"><input type="text" name="equipo_propio" required></div>
		</div>
		<br>
		<br>
	</div>
	<!--Fin del bloeque de información del usuario a registrar-->
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<input class="btn btn-primary btn-lg active" 
				type="submit"
				value="Enviar solicitud">
			</div>	
			<div class="col-md-5">
				
			</div>

		</div>
	</div>
	
</form>
@endsection
