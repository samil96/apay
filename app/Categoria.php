<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';


    protected $fillable = [
        'id', 'nombre', 'created_at', 'updated_at'
    ];
}
