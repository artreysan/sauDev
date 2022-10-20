<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SistemaAplicaciones extends Model
{
    use HasFactory;
    protected $table = 'sistema_aplicaciones';

    protected $fillable = [
        'idEquipo',
        'aplicacion',
        'ipFIja',
        'puerto'
    ];
}
