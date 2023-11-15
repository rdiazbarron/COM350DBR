<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_editorial',
        'descripcion'
    ];
    public function libros() {
        return $this->hasMany(Libro::class, 'editorial_id', 'id_editorial');
    }
}
