<?php
namespace Modelo;

use Illuminate\Database\Eloquent\Model;

class PeliculaDirector extends Model
{
    protected $table = 'Pelicula_Director';
    public $timestamps = false;
    protected $fillable = ['pelicula_id', 'director_id'];
}