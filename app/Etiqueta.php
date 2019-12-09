<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
     // MUCHOS A MUCHOS
    public function libros() {
        return $this->belongsToMany(Libro::class);
    }
}
