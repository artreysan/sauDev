<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemaHerramientasDeAdministracion extends Model
{
    use HasFactory;
    protected $table = 'sistema_herramientas_de_administracions';

    protected $fillable = [
        'idEquipo',
        'cache',
        'openshift',
        'pentaho',
        'owncloud',
        'matomo',
        'plone'
    ];
}
