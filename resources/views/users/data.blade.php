@php
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

@endphp