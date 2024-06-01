<?php
namespace Modelo;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'Generos';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nombre'];
}