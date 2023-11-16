<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_sala',
        'tipo',
        'capacidad'    
    ];
    protected $primaryKey = 'id_sala'; 
    // public function salas() {
    //     return $this->hasMany(Sala::class,'id_sala' , 'id_pelicula');
    // }
}
