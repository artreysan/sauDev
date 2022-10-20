<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model{
    
    use HasFactory;

    protected $table = 'solicituds';

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'autorizador',
        'puesto',
        'empresa',
        'direccion',
        'contrato',
        'funcion',
        'vpn',
        'ip_fija',
        'internet',
        'gitlab',
        'jira',
        'glpi',
        'tipo_equipo',
        'marca',
        'modelo',
        'serie',
        'mac',
        'ip_antigua',
        'equipo_propio',
        'equipo_sict',
        'fileID',
        'emailSend',
        'userID',
        'startTime'
    ];

    //Relacion one to Many 
    public function records (){
        return $this->hasMany('App\Record');
    }
}
