<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectoglpi extends Model
{
    use HasFactory;
    protected $table = 'proyectoglpis';

    protected $fillable = [
        'idUsuario',
        'proyecto',
        'coordinador',
        'nivelDeAcceso'
    ];
}
