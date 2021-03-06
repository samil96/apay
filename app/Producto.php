<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = [
        'id', 'nombre', 'descripcion', 'precio', 'foto', 'id_subcategoria', 'id_und_medida', 'created_at', 'updated_at'
    ];
}
