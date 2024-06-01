<?php
namespace Modelo;

use Illuminate\Database\Eloquent\Model;

class PeliculaGenero extends Model
{
    protected $table = 'Pelicula_Genero';
    public $timestamps = false;
    protected $fillable = ['pelicula_id', 'genero_id'];
}