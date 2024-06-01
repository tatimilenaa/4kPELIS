<?php
namespace Modelo;

use Illuminate\Database\Eloquent\Model;

class MensajesContacto extends Model
{
    protected $table = 'mensajescontacto';
    protected $primaryKey = 'mensajeid';
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'correo',
        'celular',
        'mensaje',
        'fechaenvio',
    ];
}