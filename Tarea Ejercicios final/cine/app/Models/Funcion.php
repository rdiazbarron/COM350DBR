<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_funcion',
        'id_pelicula',
        'id_sala',
        'fecha',
        'hora',
        'precio',
        'estado'
    ];
    protected $primaryKey = 'id_funcion'; 
}
