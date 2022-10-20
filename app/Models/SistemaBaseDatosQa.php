<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemaBaseDatosQa extends Model
{
    use HasFactory;
    protected $table = 'sistema_base_datos_qas';

    protected $fillable = [
        'idEquipo',
        'aplicacion',
        'ipFIja',
        'puerto'
    ];
    
}
