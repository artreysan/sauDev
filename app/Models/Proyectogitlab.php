<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectogitlab extends Model
{
    use HasFactory;
    protected $table = 'proyectogitlabs';

    protected $fillable = [
        'idUsuario',
        'proyecto',
        'coordinador',
        'nivelDeAcceso'
    ];
}
