<?php
namespace Modelo;

use Illuminate\Database\Eloquent\Model;

class PeliculaActor extends Model
{
    protected $table = 'Pelicula_Actor';
    public $timestamps = false;
    protected $fillable = ['pelicula_id', 'actor_id'];
}