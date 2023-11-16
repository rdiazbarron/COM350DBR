<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'id_pelicula',
        'titulo',
        'artistas_principales',
        'año',
        'productora',
        'genero', 
    ];
    protected $primaryKey = 'id_pelicula'; 
    // public function salas() {
    //     return $this->hasMany(Sala::class,'id_sala' , 'id_pelicula');
    // }

}
