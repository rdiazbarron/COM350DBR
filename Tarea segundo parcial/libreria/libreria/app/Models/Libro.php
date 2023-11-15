<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_libro',
        'titulo',
        'autor',
        'editorial_id',
        'edicion',
        'pais',
        'precio'];
        protected $primaryKey = 'id_libro'; 
    public function editoriales() {
        return $this->belongsTo(Editorial::class, 'editorial_id', 'id_editorial');
}
}
