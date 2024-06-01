<?php
namespace Modelo;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'Directores';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nombre', 'apellido'];
}
