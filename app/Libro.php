<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    // UNO A MCHOS (INVERSA)
    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    // MUCHOS A MUCHOS
    public function etiquetas() {
        return $this->belongsToMany(Etiqueta::class);
    }
    
    protected $dates = ['fecha'];
}
