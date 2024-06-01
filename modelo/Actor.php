<?php
namespace Modelo;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'Actores';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellido'];
}